<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class productImage extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'img',
    ];

    public function product()
  	{
   		return $this->belongsTo('App\Models\Products\product');    	
	}
}
