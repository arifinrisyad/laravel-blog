<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
      $keyword = request()->keyword;

       if ($keyword) {
        $articles =  Article::with('Category')
        ->whereStatus(1)->where('title', 'like', '%' .$keyword. '%')
        ->latest()->Paginate(3);
       } else {
       $articles =  Article::with('Category')->whereStatus(1)->latest()->Paginate(3);
       }


      return view('front.article.index', [
            'article' => $articles,
            'keyword'  => $keyword,
           
      ]);
    }

    public function show($slug)
    {
          $article = Article::whereSlug($slug)->firstOrFail();
          $article->increment('views');
        
      return view('front.article.show', [
            'article' => $article,
            'categories'  => Category::latest()->get(),
          
      ]);
    }
}
