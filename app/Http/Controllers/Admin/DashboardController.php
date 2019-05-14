<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\Article;

class DashboardController extends Controller
{
    //Dashboard
    public function dashboard(){
      return view('admin.dashboard',[
        'categories'=>Category::lastCategories(5),
        'article'=> Article::lastArticles(5),
        'count_categories' => Category::count(),
        'count_articles' => Article::count()
      ]);
    }
}
