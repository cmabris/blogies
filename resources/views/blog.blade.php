<x-layout meta-title="Blog" meta-description="Descripción de la página del Blog">
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h2>
    @endforeach
</x-layout>
