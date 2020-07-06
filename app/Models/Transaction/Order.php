<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction\Order_details;
use App\Models\Transaction\Order;
use App\Models\Products\product;

class Order extends Model
{

    public function scopeLatestFirst($query)
    {

       $query->orderBy('updated_at','desc');
    }

    public function orderDetails()
  	{
   		return $this->hasMany('App\Models\Transaction\Order_details'); 
	  }

    public function payment()
    {
      return $this->hasMany('App\Models\Payment\payment_status');
    }

	 public function user()
    {
       return $this->belongsTo('App\Models\User');
    }

    public function products()
    {
       return $this->hasManyThrough('App\Models\Products\product', 'App\Models\Transaction\Order_details');
    }

    public function orderStatus(){

      
    }
}
