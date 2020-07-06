<?php

namespace App\Models\Greenleaf;

use Illuminate\Database\Eloquent\Model;

class Greenleaf extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address', 'location', 'contact',
    ];
}
