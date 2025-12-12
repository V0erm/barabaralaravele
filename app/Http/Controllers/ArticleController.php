<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::with(['author', 'category'])
            ->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article){
        $article->load(['author', 'category']);
        return view('articles.show', compact('article'));
    }
}
