<x-layout meta-title="Create a new Post" meta-description="Form to create a new Post">
    <h1>Create a new Post</h1>

    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>
            Title <br />
            <input type="text" name="title">
        </label>
        <br />
        <label>
            Body <br />
            <textarea name="body"></textarea>
        </label>
        <br />
        <button type="submit">Send</button>
        <br />
    </form>
    <a href="{{ route('posts.index') }}">Back</a>
</x-layout>
