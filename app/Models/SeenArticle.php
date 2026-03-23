<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeenArticle extends Model
{
    
    protected $fillable = [
            'title', 
            'subtitle', 
            'image', 
            'content', 
            'slug', 
            'is_published', 
            'published_at'
        ];

        protected $casts = [
            'is_published' => 'boolean',
            'published_at' => 'datetime',
        ];
        
}
