<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\User;
use Auth;
use App\Comment;

class CommentsController extends Controller
{
    public function add(Request $request)
    {
      $rules=[
      "comment"=>"required|max:300",
      "rating"=>"required",
    ];

      $this->validate($request,$rules);

      $newComment = new Comment();

      $newComment->user_id = Auth::user()->id;
      $newComment->shop_id = $request["shop_id"];
      $newComment->comment = $request["comment"];
      $newComment->rating = $request["rating"];

      $newComment->save();

      return redirect("/shops/$newComment->shop_id");
    }

    public function addFromProfile(Request $request)
    {
      $rules=[
      "comment"=>"required|max:300",
      "rating"=>"required",
    ];

      $this->validate($request,$rules);

      $newComment = new Comment();

      $newComment->user_id = Auth::user()->id;
      $newComment->shop_id = $request["shop_id"];
      $newComment->comment = $request["comment"];
      $newComment->rating = $request["rating"];

      $newComment->save();

      return redirect("/user");
    }
}
