<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        if (auth()->user()->role->name == 'admin' ||
            auth()->user()->role->name == 'creator') {
            $statuses = [
                'draft' => 'borrador',
                'published' => 'publicado',
                'archived' => 'archivado',
                'pending' => 'pendiente',
            ];

            return view('posts.create', ['post' => new Post(), 'statuses' => $statuses]);
        }

        return $this->index();
    }

    public function store(StorePostRequest $request)
    {
        $post = auth()->user()->posts()->make($request->validated());

        $post->slug = Str::slug($post->title);
        $post->save();

        return to_route('posts.index')
            ->with('status', 'Post created successfully');
    }

    public function edit(Post $post)
    {
        if (auth()->user()->role->name == 'admin' ||
            auth()->user()->role->name == 'validator' ||
            auth()->user()->role->name == 'editor') {
            $statuses = [
                'draft' => 'borrador',
                'published' => 'publicado',
                'archived' => 'archivado',
                'pending' => 'pendiente',
            ];

            return view('posts.edit', ['post' => $post, 'statuses' => $statuses]);
        }

        return $this->index();
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());
        $post->slug = Str::slug($post->title);
        $post->save();

        return to_route('posts.show', $post)
            ->with('status', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {


        if (auth()->user()->role->name == 'admin' ||
            auth()->user()->role->name == 'eraser') {

            if ($post->status == 'draft' || $post->status == 'pending') {
                $post->delete();
            }

            $post->delete();

            return to_route('posts.index')
                ->with('status', 'Post deleted successfully');
        }

        return $this->index();
    }

    public function userPosts()
    {
        $posts = auth()->user()->posts;

        return view('posts.index', compact('posts'));
    }
}
