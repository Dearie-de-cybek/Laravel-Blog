<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index(){
        return view('admin.index', ['posts' => Post::paginate(18)]);
    }

    public function edit(Post $post){
        return view('admin.edit', ['post' => $post]);
    }

    
    public function update(Post $post){
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
        if(isset($attributes['thumbnail'])){
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('Success', 'Post Updated!');
    }

    public function destroy(Post $post){
        $post->delete();

        return back()->with('Success', 'Post Deleted!');
    }
}
