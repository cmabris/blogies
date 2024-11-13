<div>
    <x-input-label for="title" :value="__('Title')" />
    <x-text-input id="title"
                  name="title"
                  type="text"
                  value="{{ old('title', $post->title) }}"
                  class="block w-full mt-1"
    />
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>
<div>
    <x-input-label for="body" :value="__('Body')" />
    <x-textarea id="body"
                name="body"
                class="block w-full mt-1"
    >{{ old('body', $post->body) }}</x-textarea>
    <x-input-error :messages="$errors->get('body')" class="mt-2" />
</div>
<div>
    <x-input-label for="body" :value="__('Summary')" />
    <x-textarea id="summary"
                name="summary"
                class="block w-full mt-1"
    >{{ old('summary', $post->summary) }}</x-textarea>
    <x-input-error :messages="$errors->get('summary')" class="mt-2" />
</div>
<div>
    <x-input-label for="published_at" :value="__('Published at')" />
    <x-text-input id="published_at"
                  name="published_at"
                  type="date"
                  value="{{ old('published_at', $post->published_at) }}"
                  class="block w-full mt-1"
    />
    <x-input-error :messages="$errors->get('published_at')" class="mt-2" />
</div>
<div class="mb-4">
    <x-input-label>Estado del Post</x-input-label>
    <select class="w-full form-control text-sm" name="status">
        <option value="" selected disabled>Seleccione un estado</option>
        @foreach($statuses as $status => $value)
            <option value="{{ $status }}">{{ $value }}</option>
        @endforeach
    </select>
    <x-input-error :messages="$errors->get('status')" class="mt-2"  />
</div>
<div>
    <x-input-label for="reading_time" :value="__('Reading time')" />
    <input id="reading_time"
                  name="reading_time"
                  type="number"
                  value="{{ old('reading_time', $post->reading_time) }}"
                  class="block w-full mt-1"
    />
    <x-input-error :messages="$errors->get('reading_time')" class="mt-2" />
</div>
