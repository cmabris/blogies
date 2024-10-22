<x-app-layout :meta-title="$post->title" :meta-description="$post->body">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('posts.update', $post) }}"
                          class="space-y-4 max-w-xl"
                    >
                        @include('posts.form-fields')

                        <x-primary-button type="submit" class="mt-4">{{ __('Save') }}</x-primary-button>

                        @csrf
                        @method('PATCH')
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
