<?php

namespace App\Http\Controllers;
use Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(){
      return view('cart');
    }

    //add
    public function add($id)
    {
        $products = [];
        $product = Product::find($id);
        if($product){
            $found = false;
            foreach (Cart::content() as $p) {
              if($p->id == $product->id){
                  $found = true;
              };

            }

            if( $found == false){
                Cart::add([
                    'id' => $product->id,
                    'name' => $product->name,
                    'qty' => 1,
                    'price' => $product->price,
                    'weight' => 0,
                    'options' => ['description' => $product->description]
                ]);
            }
        }

        return redirect('cart');
    }

    public function remove($id)
    {
        //dd(Cart::content());
       $product = Product::find($id);
       foreach (Cart::content() as $content)
       {
            if ($content->id == $product->id)
            {
                Cart::remove($content->rowId);
            }
       }
        return redirect ('cart');
    }
       

}
