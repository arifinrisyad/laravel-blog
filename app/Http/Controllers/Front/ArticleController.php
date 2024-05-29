<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
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
            'keyword'  => $keyword
      ]);
    }

    public function show($slug)
    {
      return view('front.article.show', [
            'article' => Article::whereSlug($slug)->first(),
            'categories'  => Category::latest()->get(),
          
      ]);
    }
}
