<?php

namespace App\Http\Controllers;
use Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //add
    public function add($id)
    {
        $products   = [];
        $product    = Product::find($id);
        if($product){
            $encontro = false;
            foreach (Cart::content() as $p) {
              if($p->id == $product->id){
                  $encontro = true;
              };
              
            }

            if( $encontro == false){
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
    //remove
    public function remove($id)
    {
        Cart::remove($id);
    }
    return redirect('cart');
}