@extends('layouts.app')

@section('content')
<div class="container max-w-3xl">
    <h1 class="text-3xl">{{ $article->title }}</h1>

    <p class="text-sm text-gray-600">
        {{ $article->category->name }} · by {{ $article->author->name }} · {{ $article->published_at->format('M d, Y') }}
    </p>

    @if($article->image)
        <img src="{{ asset('storage/' . $article->image) }}" class="w-full my-4"/>
    @endif

    <div class="prose">{!! nl2br(e($article->body)) !!}</div>
</div>
@endsection
