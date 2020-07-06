<?php

namespace App\Http\Controllers\Training;

use App\Models\Training\Online;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class OnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $online = online::LatestFirst()->paginate(15);
        return view('Backend.Training.Schedule.online.index', compact('online'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Backend.Training.Schedule.online.create');
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
            'location' => 'required|string|max:100',
        ]);

        online::create([
            'subject' => $request->subject,
            'body' => $request->body,
            'location' => $request->location
        ]);

        return redirect()->route('admin.training.schedule.online.index')->with('success','Item Created succefully.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\online\online  $online
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $online = online::findOrFail($request->id);
        return view('Backend.Training.Schedule.online.edit', compact('online'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\online\online  $online
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $this->validate($request, [
            'subject' => 'required|string|max:255',
            'body' => 'required|string|max:1000',
            'location' => 'required|string|max:100',
        ]);

        $online = online::findOrFail($request->_id);
        $online->subject = $request->subject;
        $online->location = $request->location;
        $online->body = $request->body;
        $online->save();

        return redirect()->route('admin.training.schedule.online.index')->with('success','Item Updated succefully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\online\online  $online
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $online = online::findOrFail($request->id);
        $online->delete();

        return redirect()->route('admin.training.schedule.online.index')->with('success','Item Deleted succefully.');
    }
}
