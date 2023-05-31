<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(Article $article, User $user, Category $category)
    {
        $this->article = $article;
        $this->user = $user;
        $this->category = $category;
    }

    public function index()
    {
        $count = $this->article->getAllArticles();
        return view('admin.dashboard', ['count' => $count]);
    }

    public function articles()
    {
        $articles = $this->article->getAllArticles(5);
        return view('admin.articles', [
            'articles' => $articles,
        ]);
    }

    public function authors()
    {
        $users = $this->user->getUsers(5);
        return view('admin.authors', [
            'users' => $users,
        ]);
    }


    #CRUD Article
    public function createArticle()
    {
        $categories = $this->category->getCategories();
        return view('admin.create.article_create', [
            'categories' => $categories,
        ]);
    }


    public function storeArticle(Request $request)
    {
        $article = new Article;
        $article->user_id = $request->user()->id;
        $article->title = $request->title;
        $article->slug = $request->slug;
        $article->category_id = $request->category_id;
        $article->thumbnail = $request->thumbnail;
        $article->description = $request->description;
        #dump($article);

        $article->save();

        return redirect(route('admin.articles'));

    }


    public function storeUser(Request $request)
    {
        $user = new User;
        $user->
        #dump($article);

        $article->save();

        return redirect(route('admin.articles'));

    }



}
