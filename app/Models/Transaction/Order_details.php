<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction\Order;
use App\Models\Products\product;

class Order_details extends Model
{
    public function order()
  	{
   		return $this->belongsTo('App\Models\Transaction\Order');    	
	}

	public function product()
	{
	   	return $this->belongsTo('App\Models\Products\product');
	}

}
