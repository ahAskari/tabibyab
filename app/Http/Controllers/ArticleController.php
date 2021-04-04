<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showArticles(Request $request)
    {
        $article_header = Article::paginate(3);
        $articles = Article::paginate(5);
        return view('article.all', ['article_header' => $article_header, 'articles' => $articles]);
    }
    public function article(Request $request, $id)
    {
        $article = Article::find($id);
        return view('article.article', ['article' => $article]);
    }
}
