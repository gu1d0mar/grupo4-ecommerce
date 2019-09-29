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

  public function update(){
    $rules=[
      "title"=>"required",
      "rating"=>"required|numeric|min:0|max:10",
      "awards"=>"required|numeric|min:0",
      "release_date"=>"required|date",
      "genre_id"=>"required|integer",
      "image"=>"nullable|image",
    ];

    $this->validate($form,$rules);

    $editUser = User::findOrFail($id);
    $editUser->rating = $form["username"];
    $editUser->awards = $form["email"];
    $editUser->bday = $form["bday"];
    $editUser->nbhd_id = $form["nbhd_id"];

    if ($form->has("avatar")) {
      $editUser->avatar = $form->file("avatar")->store("public/users");
    }

    $editMovie->save();
  }
}
