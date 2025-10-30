<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('posts.index', ['posts' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        Post::create();
        return redirect('/posts');
    }

    public function show()
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $req, $id)
    {
        $post = Post::find($id);

        $post->update([]);

        return redirect('/posts');
    }

    public function destroy($id)
    {
        Post::find($id);
        $post->delete();
        return redirect('/posts');
    }
}
