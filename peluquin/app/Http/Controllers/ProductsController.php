<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Shop;
use App\User;
use App\Category;
use Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        $categories = Category::all();
        //$shops = Shop::all();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $shops = Shop::where('user_id','LIKE', Auth::user()->id)
        ->get();
        return view('products.create', compact('categories', 'shops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules=[
        "name"=>"required",
        "description"=>"nullable",
        "duration"=>"nullable|min:0|max:240",
        "price"=>"required|numeric|min:0",
        "category_id"=>"required|integer",
        "shop_id"=>"required|integer",
      ];

      $this->validate($request,$rules);

      $product = new Product();
      $product->name= $request["name"];
      $product->description = $request["description"];
      $product->duration=$request["duration"];
      $product->price = $request["price"];
      $product->category_id = $request["category_id"];
      $product->shop_id = $request["shop_id"];

      $shop_id = $request["shop_id"];

      $product->save();
       return redirect("/shops/$shop_id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
