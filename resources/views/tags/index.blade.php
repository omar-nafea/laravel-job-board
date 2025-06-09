<x-layout :title="$pageTitle">

<div>
    <h1>Tags List</h1>

    @foreach ($tags as $tag)
            <h3 class="text-2xl font-bold mb-2">{{ $tag->title}}</h3>

        </div>
    @endforeach
</x-layout>