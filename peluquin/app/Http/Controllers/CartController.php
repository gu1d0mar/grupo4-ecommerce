<?php

namespace App\Http\Controllers;
use Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
       //Page: Carro de compras
    //route: product.carro
    //params: Session->cart
    //Models: shcart\Product
    //        shcart\Cart
    //return: $products, $totalPrecio -> views/shop/carrodecompras
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
    public function carro()
    {

        if(!Session::has('cart'))
            return view('shop.carrodecompras', ['products' => null]);

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.carrodecompras', [
            'carro' => $cart,
            'products' => $cart->items,
            'totalPrecio' => $cart->totalPrecio
            ]);
    }
    //Page: Añadir elementos al carro de compras (de uno en uno)
    //route: product.anadiralcarro
    //params: Session->cart
    //Models: shcart\Product
    //        shcart\Cart
    //return: $notificacion -> back
    public function anadiralcarro(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        $notificacion = array(
            'message' => $product->titulo.' añadido al carro de compras',
            'alert-type' => 'success'
        );
        return Redirect::back()->with($notificacion);

    }
    //Page: Añadir elementos al carro de compras (n cantidades definidas por el usuario)
    //route: product.postanadiralcarro
    //params: Session->cart, $request->productos
    //Models: shcart\Product
    //        shcart\Cart
    //return: $notificacion -> back
    public function postanadiralcarro(Request $request)
    {
        if($request->cantidad < 1)
        {
            $notificacion = array(
                'message' => 'La cantidad de productos debe ser mayor a 0',
                'alert-type' => 'info'
            );

            return Redirect::back()->with($notificacion);
        }
        $product = Product::find($request->id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addmany($product, $request->cantidad, $product->id);

        $request->session()->put('cart', $cart);
        $notificacion = array(
            'message' => $product->titulo.' añadido al carro de compras',
            'alert-type' => 'success'
        );

        return Redirect::back()->with($notificacion);
    }
    //Page: Reduce en 1 el contenido del carro
    //route: product.removerunitemcarro
    //params: Session->cart, $id->product_id
    //Models: shcart\Product
    //        shcart\Cart
    //return: $notificacion -> back
    public function removerunitemcarro($id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeaitem($id);
        Session::put('cart', $cart);
        $notificacion = array(
            'message' => $product->titulo.' ha sido reducido en 1',
            'alert-type' => 'warning'
        );
        return Redirect::back()->with($notificacion);
    }
    //Page: Elimina un producto del carro, independiente cuantas unidades tenga
    //route: product.removeritemcarro
    //params: Session->cart, $id->product_id
    //Models: shcart\Product
    //        shcart\Cart
    //return: $notificacion -> back
    public function removeritemcarro($id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeallitem($id);
        if(count($cart->items) > 0)
        {
            Session::put('cart', $cart);
        }
        else
        {
            Session::forget('cart');
        }
        Session::put('cart', $cart);
        $notificacion = array(
            'message' => $product->titulo.' ha sido eliminado',
            'alert-type' => 'error'
        );
        return Redirect::back()->with($notificacion);
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
