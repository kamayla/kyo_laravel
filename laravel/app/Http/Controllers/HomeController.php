<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $posts = $user->posts;

        return view('home' , ['posts' => $posts]);
    }

    public function savePost(Request $request): RedirectResponse
    {

        $user =auth()->user(); //現在ログインしているユーザーのインスタンスを取得する

        $image_path = $request->file('thumbnail_image')->store('public/img');

        $path = basename($image_path);

        $body_image_path = $request->file('body_image')->store('public/img');

        $body_path = basename($body_image_path);

        /**
         * フロントエンドから受け取ったRequestのtitleとbodyから
         * Postの新しいインスタンスを生成（ここではまだDBに保存されない）
         */
        $post = Post::make([
            'title' => $request->title,
            'body' => $request->body,
            'thumbnail_path' => $path,
            'body_image_path' => $body_path
        ]);
        /*
         * ここでUserクラスのリレーションとしてPostをDBに保存する。
         */
        $user->posts()->save($post);
        /*
         * 保存処理が終わったら、adminページへ画面を戻す。
         */
        return redirect()->to('/admin');
    }

    public function detail($id){
        $post = Post::find($id);
        return view('detail' , ['post' => $post]);
    }

    public function updatePost(Request $request){
        $post = Post::find($request->id);

        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->action('HomeController@index');
    }

    public function deletePost($id){
        $post = Post::find($id);

        $post->delete();

        return redirect()->action('HomeController@index');

    }
}
