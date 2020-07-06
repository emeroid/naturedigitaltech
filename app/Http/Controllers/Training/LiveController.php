<?php

namespace App\Http\Controllers\Training;

use App\Models\Training\live;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $live = live::LatestFirst()->paginate(15);
        return view('Backend.Training.Schedule.Live.index', compact('live'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Backend.Training.Schedule.Live.create');
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
            'subject' => 'required|string|max:255',
            'body' => 'required|string|max:150',
            'wha' => 'required|url|255',
            'contact' => 'required|string|max:100',
        ]);

        live::create([
            'subject' => $request->subject,
            'body' => $request->body,
            'wha_link' => $request->wha,
            'contact' => $request->contact
        ]);

        return redirect()->route('admin.training.schedule.live.index')->with('success','Item Created succefully.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\live\live  $live
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $live = live::findOrFail($request->id);
        return view('Backend.Training.Schedule.Live.edit', compact('live'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\live\live  $live
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //dd($request->all());
        $this->validate($request, [
            'subject' => 'required|string|max:255',
            'body' => 'required|string|max:2000',
            'wha' => 'required|url|max:255',
            'contact' => 'required|string|max:100',
        ]);



        $live = live::findOrFail($request->_id);
        $live->body = $request->body;
        $live->wha_link = $request->wha;
        $live->contact = $request->contact;
        $live->subject = $request->subject;
        $live->save();

        return redirect()->route('admin.training.schedule.live.index')->with('success','Item Updated succefully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\live\live  $live
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $live = live::findOrFail($request->id);
        $live->delete();

        return redirect()->route('admin.training.schedule.live.index')->with('success','Item Deleted succefully.');
    }
}
