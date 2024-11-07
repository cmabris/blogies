<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $posts = Post::where('published_at', '<=', now())
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post()]);
    }

    public function store(StorePostRequest $request)
    {
        auth()->user()->posts()->create($request->validated());

        return to_route('posts.index')
            ->with('status', 'Post created successfully');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return to_route('posts.show', $post)
            ->with('status', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')
            ->with('status', 'Post deleted successfully');
    }

    public function userPosts()
    {
        $posts = auth()->user()->posts;

        return view('posts.index', compact('posts'));
    }
}
