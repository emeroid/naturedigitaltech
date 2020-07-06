<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'img', 'link', 'bg', 'body'
    ];
    
}
