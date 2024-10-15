<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <h1>Edit Post</h1>
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PATCH')
        <label>
            {{ __('Title') }} <br />
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
            @error('title')
            <br />
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
        <label>
            {{ __('Body') }} <br />
            <textarea name="body">{{ old('body', $post->body) }}</textarea>
            @error('body')
            <br />
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
        <button type="submit">{{ __('Send') }}</button>
        <br />
    </form>

</x-layout>
