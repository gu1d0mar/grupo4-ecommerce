<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Product;
use App\Nbhd;
use App\Category;

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

    protected function create(Request $request)
    {
          $rules=[
          "email"=>"required|email",
          "name"=>"required|string|max:255",
          "work_hours"=>"required",
          "address"=>"required",
          "password"=>"required|string|min:8|confirmed",
        ];

        $this->validate($request,$rules);

        return Shop::create([
            'email' => $request['email'],
            'name' => $request['name'],
            'address'=> $request['address'],
            'work_hours'=> $request['work_hours'],
            'password' => Hash::make($request['password']),
        ]);
    }


    // Shop creation
    public function index()
    {
      $shops = Shop::all();
      return view('shops.index', compact('shops'));
    }

    protected function createShop()
    {
      $nbhds = Nbhd::all();
      $shops = Shop::all();
      return view('shops.create', compact('nbhds', 'shops'));

    }

    protected function storeShop(Request $form)
    {
      //$rules=[
      //  "email"=>"required|email",
      //  "name"=>"required|string|max:255",
      //  "work_hours"=>"required",
      //  "address"=>"required",
      //  "password"=>"required|string|min:8|confirmed",
      //];

      $rules=[
      "email"=>"required|email",
      "name"=>"required|string|max:255",
      "logo"=>"required|string|max:255",
      "rating"=>"decimal",
      "address"=>"required",
      "nbhd_id"=>"required|integer",
      "work_hours"=>"required",
      "password"=>"required|string|min:8|confirmed",
    ];

      $shop = new Shop();
      $shop->email = $form["email"];
      $shop->name = $form["name"];
      $shop->logo = $form["logo"];
      $shop->rating = $form["rating"];
      $shop->address = $form["address"];
      $shop->nbhd_id = $form["nbhd_id"];
      $shop->work_hours = $form["work_hours"];
      // $shop->password = Hash::make($form["password"]);
      $shop->password = $form['password'];

      $shop->save();
      return redirect("/shops/index");
    }

}
