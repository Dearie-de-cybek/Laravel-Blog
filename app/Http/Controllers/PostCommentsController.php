<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    //
    public function store(Post $post, Request $request) {
        request()->validate([
            'body' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => $request->user()->id,
            'body' => $request->input('body')
        ]);

        return redirect('/')->with('success', 'Your comment has been submitted successfully.');
    }
}
