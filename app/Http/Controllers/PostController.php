<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
       
    return view('posts.index', [
        'posts' => Post::latest()->filter(request(['search','category']))->paginate(5)->withQueryString()
    ]);
    }

    public function show(Post $post) {
        return view('posts.show', ['post' => $post, 'categories' => Category::all()]);
    }

    protected function getPosts() {
        $posts = Post::latest();
        if (request('search')){
            $posts
            -> where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');
        }
    }

    public function create(){
        if(auth()->guest()){
            abort(403);
        }

        if(auth()->user()->username !== 'ahmed15'){
            abort(Response::HTTP_UNAUTHORIZED);
        }
        return view('posts.create');
    }
} 
