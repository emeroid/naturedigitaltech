<?php

namespace App\Http\Controllers\Clients\Request;

use App\Models\Services\RequestSkill;
use App\Models\State\All_state;
use App\Models\Jobs\JobSkill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = RequestSkill::LatestFirst()->paginate(5);
        return view('BackEnd.Clients.Request.index', compact('skills'));
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
        return view('FrontEnd.Services.Request.request', compact('states','skills'));
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
            'msg' => 'string|max:255',
        ]);

        RequestSkill::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'state' => $request->state,
            'skill' => $request->skill,
            'msg' => $request->msg
        ]);
        

        return redirect()->back()->with('success', 'Your registration request was successful. Thank you for your request our agent will contact you shortly.');
    }

}
