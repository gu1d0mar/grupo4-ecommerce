<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Product;
use App\Nbhd;
use App\Category;
use App\User;
use App\Comment;
use Auth;
use Illuminate\Support\Facades\Hash;

class ShopsController extends Controller
{
      public function directory(){
      $nbhds = Nbhd::orderBy('name')->get();
      $products = Product::orderBy('name')->get();
      $categories = Category::orderBy('name')->get();
      $shops = Shop::orderby('name')
      ->paginate();

      return view('shops.shops',['shops'=>$shops,'products'=>$products,'nbhds'=>$nbhds,'categories'=>$categories,]);
      }

      public function show($id){

      $shop = Shop::findOrFail($id);
      $comments=Comment::inRandomOrder()
      ->where('shop_id','LIKE',$id)
      ->where('rating','>',2)
      ->take(5)
      ->get();
      return view('shops.show_shop', ['shop' => $shop,'comments'=>$comments]);

      }

    public function search(Request $request){
      $nbhds = Nbhd::orderBy('name')->get();
      $products = Product::orderBy('name')->get();
      $categories = Category::orderBy('name')->get();
      $shops = Shop::with('products')
      ->where('name','LIKE','%' . $request->get("search") . '%')
      ->where('nbhd_id','LIKE',$request->get('nbhd'))
      ->orderby('name')
      ->paginate();

      if($request->get('category'))
      {
        $products_category = Product::where('category_id',$request->get('category'))->pluck('shop_id');
        $shops = Shop::with('products')->whereIn('id',$products_category)
        ->where('name','LIKE','%' . $request->get("search") . '%')
        ->where('nbhd_id','LIKE',$request->get('nbhd'))
        ->orderby('name')
        ->paginate();
      }

      return view('shops.shops',['shops'=>$shops,'products'=>$products,'nbhds'=>$nbhds,'categories'=>$categories,]);
    }

    public function delete(Request $request){
    $shop = Shop::find($request['id']);
    $shop->delete();

    return redirect("/shops");
    }

    protected function create()
    {
      $nbhds = Nbhd::orderBy('name')->get();
      return view('shops.create', compact('nbhds'));
    }

    protected function store(Request $form)
    {
      $rules=[
      "email"=>"required|email",
      "name"=>"required|string|max:255",
      "logo"=>"nullable|image",
      "rating"=>"numeric",
      "address"=>"required",
      "nbhd_id"=>"required|integer",
      "opens_at"=>"required",
      "closes_at"=>"required",
      "password"=>"required|string|min:8|confirmed",
    ];

      $this->validate($form,$rules);

      $newShop = new Shop();
      $newShop->email = $form["email"];
      $newShop->name = $form["name"];
      $newShop->rating = $form["rating"];
      $newShop->address = $form["address"];
      $newShop->nbhd_id = $form["nbhd_id"];
      $newShop->opens_at = $form["opens_at"];
      $newShop->closes_at = $form["closes_at"];
      $newShop->password = Hash::make($form["password"]);
      $newShop->user_id = Auth::user()->id;

      if ($form->has("logo")) {
        $newShop->logo = $form->file("logo")->store("public/shops");
      }

      $newShop->save();

      $user=User::findOrFail(Auth::user()->id);
      $user->role = 1;
      $user->save();

      return redirect("/shops/$newShop->id");
    }

    public function edit($id){
      $nbhds = Nbhd::orderBy('name')->get();
      $shop = Shop::findOrFail($id);
      if (!$shop->user_id == Auth::user()->id) {
        return redirect("/");
      }
      return view('shops.edit',['nbhds'=>$nbhds,'shop'=>$shop,]);
    }

    public function update(Request $request,$id){
      $rules=[
      "email"=>"required|email|max:255|unique:shops,email,$id",
      "name"=>"required|string|max:255",
      "logo"=>"nullable|image",
      "rating"=>"numeric",
      "address"=>"required",
      "nbhd_id"=>"required|integer",
      "opens_at"=>"required",
      "closes_at"=>"required",
    ];

      $this->validate($request,$rules);

      $editShop = Shop::findOrFail($id);
      $editShop->email = $request["email"];
      $editShop->name = $request["name"];
      $editShop->rating = $request["rating"];
      $editShop->address = $request["address"];
      $editShop->nbhd_id = $request["nbhd_id"];
      $editShop->opens_at = $request["opens_at"];
      $editShop->closes_at = $request["closes_at"];

      if ($request->has("logo")) {
        $editShop->logo = $request->file("logo")->store("public/shops");
      }

      $editShop->save();

      return redirect("/shops/$editShop->id");
    }


}
