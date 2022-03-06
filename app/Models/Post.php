<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'title', 'slug', 'category_id', 'body', 'image'
    ];

    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Models\Tag');
    }

    public function comments()
    {
    	return $this->hasMany('App\Models\Comment');
    }
}
