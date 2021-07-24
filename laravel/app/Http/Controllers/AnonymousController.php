<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AnonymousController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('anonymous_top', ['posts' => $posts]);
    }

    public function detail($id){
        $post = Post::find($id);
        return view('anonymous_detail' , ['post' => $post]);
    }
}
