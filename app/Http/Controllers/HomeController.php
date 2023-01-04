<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view(
            'index'
        );
    }

    public function mention()
    {
        return view(
            'mentions'
        );
    }

    public function articles()
    {
        $articles = Article::all();

        return view(
            'articles',
            compact('articles')
        );
    }
    public function projects()
    {
        $projects = Project::all();

        return view(
            'projects',
            compact('projects')
        );
    }
}
