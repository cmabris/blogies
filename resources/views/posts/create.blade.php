<x-layout meta-title="Create a new Post" meta-description="Form to create a new Post">
    <h1>{{ __('Create a new Post') }}</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>
            {{ __('Title') }} <br />
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
            <br />
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
        <label>
            {{ __('Body') }} <br />
            <textarea name="body">{{ old('body') }}</textarea>
            @error('body')
            <br />
            <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br />
        <button type="submit">{{ __('Send') }}</button>
        <br />
    </form>
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
</x-layout>
