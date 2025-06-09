<x-layout :title="$pageTitle">

<div>

        <h3 class="text-3xl font-bold mb-2">{{ $post ->title }}</h3>
        <p class="text-gray-600 mb-4">{{ $post->body }}</p>
        <p class="text-sm text-gray-500 mb-2">Author: {{ $post->author }}</p>
        <p class="text-sm text-gray-500 mb-2">Created at: {{ $post->created_at->format('Y-m-d H:i') }} Updated at: {{ $post->updated_at->format('Y-m-d H:i') }}</p>
        <hr/>
        <h4 class="text-2xl font-bold mt-6 mb-4">Comments</h4>
        <ul>
                @foreach ($post->comments as $comment)
                    <li class="mb-4">
                        <strong>{{ $comment->author }}:</strong>
                        <p class="text-gray-600">{{ $comment->content}}</p>
                    </li>
                @endforeach
        </ul>
</div>
</x-layout>