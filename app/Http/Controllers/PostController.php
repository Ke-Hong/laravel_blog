<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $all = Post::all();
        // Post::all() 即 SELECT * FROM posts ORDER BY created_at DESC
        $selected =Post::orderBy('created_at','DESC')->paginate(3);//get()
        $data = [
            'posts' => $selected
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
