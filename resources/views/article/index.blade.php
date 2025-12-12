@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Fashion Magazine</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($articles as $article)
        <article class="card p-4">
            @if($article->image)
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover" />
            @endif

            <h2 class="text-xl mt-2">
                <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
            </h2>

            <p class="text-sm text-gray-600">
                {{ $article->category->name }} · by {{ $article->author->name }} · {{ $article->published_at->format('M d, Y') }}
            </p>

            <p class="mt-2">{{ $article->excerpt }}</p>
        </article>
        @endforeach
    </div>

    <div class="mt-6">{{ $articles->links() }}</div>
</div>
@endsection
