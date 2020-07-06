<?php

namespace App\Http\Controllers\Clients\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\Models\Jobs\JobRegister;
 use App\Models\State\All_state;
 use App\Models\Jobs\JobSkill;

class JobRegisterController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobreg = JobRegister::LatestFirst()->with('state','skill')->paginate(15); 
        //dd($jobreg);
        return view('BackEnd.Clients.Worker.index', compact('jobreg'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = All_state::get();
        $skills = JobSkill::get();
        return view('FrontEnd.Services.Partner.join', compact('states','skills'));
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

        $this->validate($request, [
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'mobile' => 'required|digits:11|',
            'state' => 'required|string',
            'skill' => 'required|string',
        ]);

        JobRegister::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'state_id' => $request->state,
            'jobskill_id' => $request->skill,
        ]);
        

        return redirect()->back()->with('success', 'Registration successful');
    }

}
