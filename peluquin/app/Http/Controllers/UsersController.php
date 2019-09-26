<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  public function show(){
    return view('user.profile');
  }
  public function edit(){
    return view('user.edit');
  }
}
