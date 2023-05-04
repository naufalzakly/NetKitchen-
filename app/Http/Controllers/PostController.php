<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){
        $posts = Post::get();
        return view('post.index',compact('posts'));

    }
    public function create(Request $request){
        $create = Post::get();
        return view('post.create',compact('create'));

    }
    public function store(Request $request){
        $data = $request->all ();
        $post = Post::create([
            'titlle' => $data['titlle'],
            'deskripsi' => $data['deskripsi'],
        ]);
        return redirect() -> route('post.index');
    }
}
