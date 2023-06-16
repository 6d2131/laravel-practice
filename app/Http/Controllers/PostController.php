<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id'=> 1, 'content'=> 'こんにちは'],
            ['id'=> 2, 'content'=> 'こんにちは'],
            ['id'=> 3, 'content'=> 'こんにちは'],
            ['id'=> 4, 'content'=> 'こんにちは'],
            
        ];
        return view('post', compact('posts'));
    }
}
