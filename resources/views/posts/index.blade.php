<x-layout meta-title="Blog" meta-description="Descripción de la página del Blog">

    <h1>Blog</h1>
    <a href="{{ route('posts.create') }}">{{ __('Create a new Post') }}</a>
    @foreach($posts as $post)
        <div style="display: flex; align-items: baseline">
            <h2>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            </h2>
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</x-layout>
