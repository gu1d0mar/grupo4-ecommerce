<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Product;

class ShopsController extends Controller
{
      public function directory(){
      $products = Product::all();
      $shops = Shop::orderby('name')
      ->paginate();

      return view('products.shops',['shops' => $shops,'products'=>$products]);
      }

      public function show($id){
      $shop = Shop::findOrFail($id);

      return view('products.show_shop', ['shop' => $shop]);
      }

    public function search(Request $request){
      $shops = Shop::where('name','LIKE','%' . $request->get("search") . '%')
      ->where('nbhd_id','LIKE',$request->get('nbhd'))
      ->orderby('name')
      ->paginate();

      return view('products.shops',['shops' => $shops]);
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

}
