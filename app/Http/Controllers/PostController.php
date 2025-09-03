<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPostFunction(){
        return view('create');
    }

    public function storePostFunction(Request $request){
        $validation = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $validation['user_id'] = 1;

        Post::create($validation);

        return redirect()->back()->with('success', 'Post Created Successfully');
    }
}
