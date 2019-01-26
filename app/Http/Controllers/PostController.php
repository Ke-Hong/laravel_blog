<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $all = Post::all();
        $data = [
            'posts' => $all
        ];
        return view('posts.index',$data);
    }
//    public function show($id) {
//        $one = Post::find($id);
////        若$id為不合法的數字或者不是數字 則$one裡為 null
//        $data = [
//            'post' => $one
//        ];
//        return view('posts.show',$data);
//    }

    public function show(Post $post) {
//        若$id為不合法的數字或者不是數字 則$one裡為 null
        $data = [
            'post' => $post
        ];
        return view('posts.show',$data);
    }

}
