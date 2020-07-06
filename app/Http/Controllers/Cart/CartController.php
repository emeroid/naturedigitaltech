<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products\product;

class CartController extends Controller
{
   
   public function add($id){

   		$product = Product::findOrFail($id);

   		\Cart::add(array(
    				'id' => $product->id,
    				'name' => $product->name,
    				'price' => $product->price,
    				'quantity' => 1,
    				'attributes' => array('image' => $product->productImage->img),
    				'associatedModel' => $product));

   		return redirect()->back()->with('success', 'Item Added to cart.');
   }

   	public function remove($id){

   		\Cart::remove($id);
   		return redirect()->back()->with('success', 'Item Removed from cart.');
   }

   public function update(Request $request){

   		\Cart::update($request->id, array(
            'quantity' => array(
            'relative' => false,
            'value' => $request->qty
            ),)
        );
   		return redirect()->back()->with('success', 'Item quantity Updated.');
   }

}
