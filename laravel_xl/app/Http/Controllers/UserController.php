<?php

namespace App\Http\Controllers;
use App\Models\Post; 
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
          $post = Post::all();
          return view('posts',['post'=>$post]);
    }
}
