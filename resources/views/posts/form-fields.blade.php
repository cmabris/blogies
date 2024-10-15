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
