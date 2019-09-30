<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Nbhd;
use App\Comment;
use App\Shop;
use Auth;

class UsersController extends Controller
{
  public function show(){
    $comments=Comment::inRandomOrder()
    ->where('user_id','LIKE',Auth::user()->id)
    ->take(5)
    ->get();
    $shops=Shop::orderBy('name')
    ->get();
    return view('user.profile',['comments'=>$comments,'shops'=>$shops]);
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

  public function editAvatar(){
    return view('user.editAvatar');
  }

  public function updateAvatar(Request $request){
    $user = Auth::user();
    $rules=[
      "avatar"=>"nullable|image",
    ];

    $this->validate($request,$rules);

    $editUser = User::findOrFail($user->id);

    if ($request->has("avatar")) {
      $editUser->avatar = $request->file("avatar")->store("public/users");
    }

    $editUser->save();

    return redirect("/user");
  }

  public function delete(Request $request){
    $user = User::find(Auth::user()->id);
    $user->delete();

    return redirect("/home");
  }

}
