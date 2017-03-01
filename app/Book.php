<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'author', 'title', 'description', 'pages', 'link', 'thumbnail'
    ];
}
