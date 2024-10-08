<x-layout meta-title="Blog" meta-description="Descripción de la página del Blog">
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
    @endforeach
</x-layout>
