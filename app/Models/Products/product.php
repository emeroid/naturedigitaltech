<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class product extends Model
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
        'name', 'excerpt', 'body','price','category_id'
    ];

    public function category()
  	{
   		return $this->belongsTo('App\Models\Categories\Category');    	
	  }

	 public function productImages()
    {
       return $this->hasMany('App\Models\Products\productImage');
    }

     public function productImage()
    {
       return $this->hasOne('App\Models\Products\productImage');
    }


    public function orderDetails()
    {
       return $this->hasMany('App\Models\Transaction\Order_details');
    }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($product) {
            $product->slug = Str::slug($product->name);
        });
        
    }

}
