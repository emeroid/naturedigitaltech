<?php

namespace App\Models\Training;

use Illuminate\Database\Eloquent\Model;

class live extends Model
{

	 public function scopeLatestFirst($query)
    {

       $query->orderBy('updated_at','desc');
    }
    
    protected $fillable = [
        'subject', 'wha_link','contact', 'body'
    ];
}
