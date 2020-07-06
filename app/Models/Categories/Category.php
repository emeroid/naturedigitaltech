<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
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
        'title', 'slug', 'body'
    ];

    public function products()
  	{
   		return $this->hasMany('App\Models\Products\product'); 
	}
	
	public static function boot()
    {
        parent::boot();

        static::saving(function ($category) {
            $category->slug = Str::slug($category->title);
        });
        
    }
	
}
