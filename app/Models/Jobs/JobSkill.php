<?php

namespace App\Models\Jobs;

use Illuminate\Database\Eloquent\Model;

class JobSkill extends Model
{

     public function scopeLatestFirst($query)
    {

       $query->orderBy('updated_at','desc');
    }

    
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body'
    ];

    public function courseRegister()
    {
        return $this->hasOne('App\Models\Training\courseRegister');
    }
    public function jobRegister()
    {
        return $this->hasOne('App\Models\Jobs\JobRegister');
    }
}
