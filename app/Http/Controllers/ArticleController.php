<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // $articles = Article::count();  // total number of articles
        // $articles = Article::where('is_published', true)->count();  // total number of articles


        // countBy()
        $articles = Article::pluck('id')->countBy();

        // max()
        
        return 'The output is: ' . $articles;
    }
}
