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

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function getArticlesByCategory($category_id)
    {
        return Article::where('category_id', $category_id);
    }

    public function getAllArticles($quantity = null)
    {
        return Article::latest('created_at')->paginate($quantity);
    }



}
