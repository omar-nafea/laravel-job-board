<x-layout :title="$pageTitle">

<div>
    <h1>Post Index</h1>

    @foreach ($posts as $post)
        <div>
            <h3 class="text-2xl font-bold mb-2">{{ $post ->title }}</h3>
            <p class="text-gray-600 mb-4">{{ $post->body }}</p>
            <p class="text-sm text-gray-500 mb-2">Author: {{ $post->author }}</p>
        </div>
    @endforeach
</x-layout>