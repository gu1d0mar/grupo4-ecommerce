<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopsController extends Controller
{
      public function directory(){
      $shops = Shop::orderby('name')
      ->paginate();

      return view('products.shops',['shops' => $shops]);
      }
}
