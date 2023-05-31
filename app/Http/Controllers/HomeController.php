<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function index() {

        $allCategories = $this->article->getAllArticles(6);

        $technologies = $this->article->getArticlesByCategory(1)->paginate(6);

        $videogames = $this->article->getArticlesByCategory(2)->paginate(6);

        $cinematography = $this->article->getArticlesByCategory(3)->paginate(6);

        $musics = $this->article->getArticlesByCategory(4)->paginate(6);

        $mass_culture = $this->article->getArticlesByCategory(5)->paginate(6);

        return view('layouts.main', [
            'allCategories' => $allCategories,
            'technologies' => $technologies,
            'videogames' => $videogames,
            'cinematography' => $cinematography,
            'musics' => $musics,
            'mass_culture' => $mass_culture,
        ]);



    }




}
