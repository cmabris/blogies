<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <h1>Edit Post</h1>
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PATCH')

        @include('posts.form-fields')

        <br />
        <button type="submit">{{ __('Send') }}</button>
        <br />
    </form>

</x-layout>
