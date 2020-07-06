<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training\CourseRegister;
use App\Models\State\All_state;
use App\Models\Jobs\JobSkill;

class CourseRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $training = CourseRegister::LatestFirst()->with('skill', 'state')->paginate(15);
        //dd($training);
        return view('BackEnd.Training.index', compact('training'));
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
        return view('FrontEnd.Services.Training.register', compact('states','skills'));
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
            'full_name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'mobile' => 'required|digits:11|',
            'state' => 'required|string|max:255',
            'skill' => 'required|string|max:255',
        ]);

        CourseRegister::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'state_id' => $request->state,
            'jobskill_id' => $request->skill,
        ]);
        

        return redirect()->back()->with('success', 'Your training registration was successful. Thank you for your request our agent will contact you shortly.');
    }

    
}
