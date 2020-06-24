<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{   public function show()
    {
    return Article::all();
    }
    public function search($title){
      $article = Article::where('title', 'like', '%'.$title.'%')->get();
      if (!count($article->toArray())){
          return null;
      }
      return $article;
    }

}
