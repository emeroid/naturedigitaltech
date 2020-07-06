<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State\All_state;
use App\Models\User;
use App\Models\Affiliate\Affiliate;
use App\Models\Payment\Payment_status;
use App\Models\Transaction\Order;
use App\Models\Transaction\Order_details;
use Session;
use Hash;
use Cookie;

class CheckoutController extends Controller
{
	
    /** 
     *  Check if cart is empty 
    **/
	public function checkCartEmpty(){
		$cartCollection = $this->checkoutContents();
		if(count($cartCollection) == 0) {return redirect()->route('product.items')->with('error', 'Your cart is Empty.');}
	}

    
    /** 
     *  Get the content of the cart 
     *  @ return \Cart collection
    **/
	public function checkoutContents(){
		return \Cart::getContent();
	}

    
    /** 
     *  Get the content of cart
     *  @ return View
    **/
    public function getCheckout(){

    	$cartCollection = $this->checkoutContents();
    	$this->checkCartEmpty();
    	$states = All_state::get();
    	return view('FrontEnd.Products.checkout', compact('cartCollection', 'states'));
    }

    
    /** 
     *  Clear all checkout contents
     *   
    **/
    public function clearCheckout(){

        if(count($this->checkoutContents()) !== 0){
            \Cart::clear();
    	}
    }

    
    /** 
     *  Store all form values and order details to DB
     *  @ return View 
    **/
    public function storeCheckout(Request $request){

        $cartCollection = $this->checkoutContents();
        $total = \Cart::getTotal();
        $this->checkCartEmpty();
        $this->validate($request, [
       'address' => "required|string|max:255|regex:/(^[-0-9A-Za-z.,'\/ ]+$)/",
       'mobile' => 'required|regex:/^[0-9 ]*$/i|max:11',
       'full_name' => 'required|string|max:255',
       'email' => 'required|email|max:255',
       'state' => 'required|string',

       ]);
        
        // Store the form field values to database
        $this->storeUserOder($request);

    	return view('FrontEnd.Products.payment', compact('cartCollection','total'));
    }


    /** 
     *  Check User information
     *  Store user order details to db
    **/
    public function storeUserOder(Request $request){

        //Get Checkout Content
        $carts = $this->checkoutContents();

        //Check the type of users, i.e affiliate or regular user.
        $user = $this->userCheck($request);

        //Order information
        $order = new order;
        $order->user_id = $user->id;
        $order->mobile = $request->mobile;
        $order->full_name = $request->full_name;
        $order->address = $request->address;
        $order->state = $request->state;
        $order->email = $request->email;
        $order->order_status = 'Pending';
        $order->save();

        //Fill Order details information

        foreach ($carts as $cart) {
         
            $orderDetails = new order_details;
            $orderDetails->order_id = $order->id;
            $orderDetails->product_id = $cart->id;
            $orderDetails->qty = $cart->quantity;
            $orderDetails->price = $cart->price;
            $orderDetails->save();
        }

        Session([
            'order_id' => $order->id
        ]);

        //return $order;

    }

    /** 
     *  @ return success View 
    **/
    public function successCheckout(Request $request){
        
        $order_id = session()->get('order_id');
        $order = Order::find($order_id);
        $order->order_status = 'Approved';
        $order->ref = $request->transactionId;
        $order->save();

        /*Payment_status::create([
            'transaction_id' => $request->transactionId,
            'order_id' => $order_id,
            'payment' => 'success'

        ]);*/

        //Clear all checkout data from session
        $this->clearCheckout();

        return view("FrontEnd.Products.success");

    }

    /** 
     * @ return failed View   
    **/
    public function failCheckout(Request $request){

        $order_id = session()->get('order_id');
        $order = Order::find($order_id);
        $order->order_status = 'Failed';
        $order->ref = $request->transactionId;
        $order->save();

        /*Payment_status::create([
            'transaction_id' => $request->transactionId,
            'order_id' => $order_id,
            'payment' => 'failed'

        ]);*/

    	return view("FrontEnd.Products.fail");
    }

    /** 
     * @ return current user 
    **/
   	public function userCheck(Request $request){

	 $user = ''; // initialize user value to empty string
     $carts = $this->checkoutContents(); //check cart information

     if(auth()->check()){   //check if user is Authenticated

     	$user = auth()->user(); // User is Affiliate
        
        // Store Affiliate information to db
     	$affiliate = Affiliate::find($user->affiliate->id);
     	$affiliate->mobile = $request->mobile;
     	$affiliate->address = $request->address;
     	$affiliate->state = $request->state;
     	$affiliate->save();
     }

     else{
        
        // check if regular user alredy exist
     	$userExist = User::where('email', '=', $request->email)->first();
     	
     	if($userExist !== Null){ // if regular user exist
     		
            // Update regular user information
            $user = User::find($userExist->id);
     		$user->referred_by = request()->hasCookie('referral') ? \Crypt::decryptString(Cookie::get('referral')) : Null;
     		$user->save(); //check if referrer exist, then update 

     	}else{
        
     	    // Check if regular user is new, then store his information
     		$user = new User;
     		$user->referred_by = request()->hasCookie('referral') ? \Crypt::decryptString(Cookie::get('referral')) : Null;
     		$user->name = $request->full_name;
     		$user->email = $request->email;
     		$user->password = Hash::make($request->full_name.$user->id);
     		$user->save();
     	}

     }

     return $user;
	}
}
