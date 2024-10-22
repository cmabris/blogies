<x-app-layout meta-title="Create a new Post" meta-description="Form to create a new Post">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create a new Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('posts.store') }}"
                          class="space-y-4 max-w-xl"
                    >
                        @include('posts.form-fields')

                        <x-primary-button type="submit" class="mt-4">{{ __('Save') }}</x-primary-button>

                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
