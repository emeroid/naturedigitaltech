<?php

namespace App\Http\Controllers\Clients\Affiliate;

use App\Models\Affiliate\Affiliate;
use App\Models\Transaction\Order;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class AffiliatesController extends Controller
{
    use RegistersUsers;


     /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/product/items';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('FrontEnd.Affiliate.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = "";
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' =>'required|string|min:8|confirmed',
            'mobile' => 'required|digits:11|',
            'address' => 'required|string'
        ]);

        $user = User::where('email', '=', $request->email)->first();
        //dd($user);
        if(!is_null($user) && $user->affiliate()->exists() === false){
                $user->password = bcrypt($request->password);
                $user->save();

        } else{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password'=>bcrypt($request->password),
            ]);
        }

        Affiliate::create([

            'user_id' => $user->id,
            'mobile' => $request->mobile,
            'address' => $request->address,

        ]);

        return '  <!-- Yellow Alert -->
            <div class="alert alert-dismissible fade show g-bg-primary rounded-0" role="alert">
              <div class="media">
                <span class="d-flex g-mr-10 g-mt-5">
                  <i class="icon-info g-font-size-25"></i>
                </span>
                <span class="media-body align-self-center g-color-white">
                  <strong>Notice!</strong> Your Registration was successful. <a href="/login">Click to login</a> Or <a href="/product/items">Shop</a> to complete your affiliate membership
                </span>
              </div>
            </div>
      <!-- End Yellow Alert -->';
    }


}
