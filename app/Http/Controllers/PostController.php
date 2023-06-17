<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // $posts = [
        //     ['id'=> 1, 'content'=> 'こんにちは'],
        //     ['id'=> 2, 'content'=> 'こんにちは'],
        //     ['id'=> 3, 'content'=> 'こんにちは'],
        //     ['id'=> 4, 'content'=> 'こんにちは'],
        // ];
        // $posts =Post::where('content', '=', 'おはよう')->get();
        $posts = Post::all();
        // $newPost = new Post();
        // $newPost->content = 'こんばんは';
        // // $newPost->save();
        return view('post/index', compact('posts'));
    }
    public function create()
    {
        $post = new Post();
        return view('post/create', compact('post'));
    } 
    public function store(Request $request)
    {
        $newPost = new Post();
        $newPost->content = $request->content;
        $newPost->save();
        return redirect('/post');
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/post');
    }
}
