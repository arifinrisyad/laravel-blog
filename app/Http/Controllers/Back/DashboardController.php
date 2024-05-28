<?php

namespace App\Http\Controllers\Back;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('back.dashboard.index', [
            'total_article'    => Article::count(),
            'total_categories' => Category::count(),
            'latest_article'   => Article::with('category')->whereStatus('1')->latest()->take(5)->get(),
            'popular_article'  => Article::with('category')->whereStatus('1')->orderBy('views', 'desc')->take(5)->get(),
        ]);
    }
}
