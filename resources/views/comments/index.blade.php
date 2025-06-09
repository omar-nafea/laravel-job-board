<x-layout :title="$pageTitle">

<div>
    <h1>Post Index</h1>

    @foreach ($comments as $comment)
        <div>
            <h3 class="text-2xl font-bold mb-2">{{ $comment ->author }}</h3>
            <p class="text-gray-600 mb-4">{{ $comment->body }}</p>
            <a href="/blog/{{ $comment->post->id }}">{{ $comment->post->title }}</a>
        </div>
    @endforeach
</x-layout>