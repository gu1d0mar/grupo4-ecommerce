<?php

namespace App\Http\Controllers;

use App\Nbhd;
use App\Shops;
use App\Products;

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
        return view('home',['nbhds'=>$nbhds]);
    }
}
