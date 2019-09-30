<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Nbhd;
use Auth;

class UsersController extends Controller
{
  public function show(){
    return view('user.profile');
  }
  public function edit(){
    $nbhds = Nbhd::orderBy('name')->get();
    return view('user.edit',['nbhds'=>$nbhds]);
  }

  public function update(Request $request){
    $user = Auth::user();
    $rules=[
      "username"=>"required|string|max:255|unique:users,username,$user->id",
      "email"=>"required|string|email|max:255|unique:users,email,$user->id",
      "avatar"=>"nullable|image",
      "nbhd_id"=>"nullable|integer",
    ];

    $this->validate($request,$rules);

    $editUser = User::findOrFail($user->id);
    $editUser->username = $request["username"];
    $editUser->email = $request["email"];
    $editUser->bday = $request["bday"];
    $editUser->nbhd_id = $request["nbhd_id"];

    if ($request->has("avatar")) {
      $editUser->avatar = $request->file("avatar")->store("public/users");
    }

    $editUser->save();

    return redirect("/user");
  }
}
