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
        $data= [
            'title' => $request->title,
            'content' => $request->content, 
        ];
        $post = Post::create($id);
        return redirect('/posts');
    }

    public function show(Request $id)
    {
        $post = Post::find($id);
        return view('posts.show', ['posts' => $post]);
    }

    public function edit(Request $id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $data= [
            'title' => $request->title,
            'content' => $request->content, 
        ];
        $post->update([$data]);

        return redirect('/posts');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts');
    }
}
