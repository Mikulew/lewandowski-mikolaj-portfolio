<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canvas extends Model
{
    protected $fillable = [
        'category_id', 'title', 'description', 'script', 'link', 'thumbnail'
    ];
    
    public function technology() {
        return $this->belongsToMany(Technology::class, 'canvas_has_technologies', 'canvas_id', 'technologies_id');
    }
}
