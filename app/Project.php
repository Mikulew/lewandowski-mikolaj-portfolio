<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'link', 'thumbnail'
    ];
    
    public function technology() {
        return $this->belongsToMany(Technology::class, 'projects_has_technologies', 'projects_id', 'technologies_id');
    }
}
