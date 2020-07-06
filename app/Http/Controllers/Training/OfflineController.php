<?php

namespace App\Http\Controllers\Training;

use App\Models\Training\Offline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class OfflineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $offline = offline::LatestFirst()->paginate(15);
        return view('Backend.Training.Schedule.offline.index', compact('offline'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Backend.Training.Schedule.offline.create');
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
            'subject' => 'required|string|max:100',
            'body' => 'required|string|max:150',
            'location' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'contact' => 'required|string|max:100',
        ]);

        offline::create([
            'subject' => $request->subject,
            'body' => $request->body,
            'location' => $request->location,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'contact' => $request->contact
        ]);

        return redirect()->route('admin.training.schedule.offline.index')->with('success','Item Created succefully.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\offline\offline  $offline
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $offline = offline::findOrFail($request->id);
        return view('Backend.Training.Schedule.offline.edit', compact('offline'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\offline\offline  $offline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $this->validate($request, [
            'subject' => 'required|string|max:255',
            'body' => 'required|string|max:1000',
            'location' => 'required|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'contact' => 'required|string|max:100',
        ]);

        $offline = offline::findOrFail($request->_id);
        $offline->subject = $request->subject;
        $offline->body = $request->body;
        $offline->location = $request->location;
        $offline->start_date = $request->start_date;
        $offline->end_date = $request->end_date;
        $offline->contact = $request->contact;
        $offline->save();

        return redirect()->route('admin.training.schedule.offline.index')->with('success','Item Updated succefully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\offline\offline  $offline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $offline = offline::findOrFail($request->id);
        $offline->delete();

        return redirect()->route('admin.training.schedule.offline.index')->with('success','Item Deleted succefully.');
    }
}
