<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Product;
use App\Nbhd;
use App\Category;
use Illuminate\Support\Facades\Hash;

class ShopsController extends Controller
{
      public function directory(){
      $nbhds = Nbhd::all();
      $products = Product::all();
      $categories = Category::all();
      $shops = Shop::orderby('name')
      ->paginate();

      return view('products.shops',['shops'=>$shops,'products'=>$products,'nbhds'=>$nbhds,'categories'=>$categories,]);
      }

      public function show($id){
      $shop = Shop::findOrFail($id);

      return view('products.show_shop', ['shop' => $shop]);
      }

    public function search(Request $request){
      $nbhds = Nbhd::all();
      $products = Product::all();
      $categories = Category::all();
      $shops = Shop::with('products')
      ->where('name','LIKE','%' . $request->get("search") . '%')
      // ->where('category_id','LIKE',$request->get('category'))
      ->where('nbhd_id','LIKE',$request->get('nbhd'))
      ->orderby('name')
      ->paginate();

      return view('products.shops',['shops'=>$shops,'products'=>$products,'nbhds'=>$nbhds,'categories'=>$categories,]);
    }

    public function delete(Request $request){
    $shop = Shop::find($request['id']);
    $shop->delete();

    return redirect("/shops");
    }

    public function index()
    {
      $shops = Shop::all();
      return view('shops.index', compact('shops'));
    }

    protected function create()
    {
      $nbhds = Nbhd::all();
      $shops = Shop::all();
      return view('shops.create', compact('nbhds', 'shops'));
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

      if ($form->has("logo")) {
        $newShop->image = $form->file("logo")->store("public/shops");
      }

      $newShop->save();
      return redirect("/shops");
    }

}
