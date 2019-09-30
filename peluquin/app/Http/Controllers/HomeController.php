<?php

namespace App\Http\Controllers;

use App\Nbhd;
use App\Shop;
use App\Product;
use App\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nbhds = Nbhd::orderby('name')->get();
        $categories = Category::orderby('name')->get();
        $shops = Shop::inRandomOrder()
        ->take(3)
        ->get();
        return view('home',['nbhds'=>$nbhds,'categories'=>$categories,'shops'=>$shops]);
    }
}
