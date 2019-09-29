<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Shop;
use App\Category;

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
        $shops = Shop::all();
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
        //
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

    public function storeProduct(Request $form){
      //$product = new Product();


      //$product->name = request('name');
      //$product->description = request('description');
      //$product->price = request('price');
      //$product->id = request('category_id');
      //$product->id = request('shop_id');

      //$product->save();

      $rules=[
        "name"=>"required",
        "description"=>"required",
        "price"=>"required|numeric|min:0",
        "category_id"=>"required|integer",
        "shop_id"=>"required|integer",
      ];

      //$this->validate($form,$rules);
      $product = new Product();
      $product->name= $form["name"];
      $product->description = $form["description"];
      $product->price = $form["price"];
      $product->category_id = $form["category_id"];
      $product->shop_id = $form["shop_id"];


      $product->save();
       return redirect("/products");

    }


}
