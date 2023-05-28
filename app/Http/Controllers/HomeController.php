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

        $allCategories = $this->article->getAllCategoriesArticles();

        $technologies = $this->article->getTechnologyCategory()->paginate(6);

        $videogames = $this->article->getVideoGameCategory()->paginate(6);

        $cinematography = $this->article->getCinemaCategory()->paginate(6);

        $musics = $this->article->getMusicCategory()->paginate(6);

        $mass_culture = $this->article->getMassCultureCategory()->paginate(6);

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
