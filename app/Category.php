<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category','user_id'];
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}