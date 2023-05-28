<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getTechnologyCategory()
    {
        return Article::where('category_id', '1');;
    }

    public function getVideoGameCategory()
    {
        return Article::where('category_id', '2');;
    }

    public function getCinemaCategory()
    {
        return Article::where('category_id', '3');
    }

    public function getMusicCategory()
    {
        return Article::where('category_id', '4');
    }

    public function getMassCultureCategory()
    {
        return Article::where('category_id', '5');
    }

    public function getAllCategoriesArticles()
    {
        return Article::paginate(6);
    }

}
