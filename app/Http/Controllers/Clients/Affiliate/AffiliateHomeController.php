<?php

namespace App\Http\Controllers\Clients\Affiliate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Affiliate\Affiliate;
use App\Models\Transaction\Order;
use Auth;
use App\Traits\ImageUploadTraits;

class AffiliateHomeController extends Controller
{
    use ImageUploadTraits;
	
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    //get Affilate transaction details

    public function getAffiliateTransaction(){
        $user = Auth::user();
        $orders = $user->order;
        return view('FrontEnd.Affiliate.home', compact('orders'));
        
    }

    //get Affilate transaction details

    public function getAffiliateProfile(){

        $user = Auth::user();
        return view('FrontEnd.Affiliate.profile', compact('user'));

    }

    public function setProfileUpdate(Request $request){

            //dd($request->_id);
        $this->validate($request, [
            'full_name' => 'required|string|max:255',
            'mobile' => 'required|string|digits:11',
            'address' => 'required|string|max:255',
            'state' => 'string',
            'img' => 'image|mimes:jpeg,png,jpg|max:102400',
        ]);

        $user = auth()->user();
        //dd($user->affiliate->id);
        $affiliate = Affiliate::findOrFail($user->affiliate->id);
        $affiliate->mobile = $request->mobile;
        $affiliate->address = $request->address;
        $affiliate->state = $request->state;
        $affiliate->img = $this->imgUpload($request, 'img', $affiliate->img, 'Affiliate/Profile/'.$affiliate->id);

        $affiliate->save();

        //dd($affiliate->img);

        return redirect()->back()->with('success', 'Profile Updated Successfully.');

    }


    //get Affilate transaction details

    public function getAffiliateReferer(){
            $user = Auth::user();
            $referer = $user->referrals;
            //dd($referer);
            //$myLink = $user->referrer;
            
            $order = [];

            foreach($referer as $ref){
                $order = Order::where('user_id', '=', $ref->id)->get();
            }

            return view('FrontEnd.Affiliate.referer', compact('referer', 'order'));
    }

}
