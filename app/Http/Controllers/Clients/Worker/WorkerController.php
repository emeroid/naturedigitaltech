<?php

namespace App\Http\Controllers\Clients\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobs\JobSkill;

class WorkerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $skill = JobSkill::LatestFirst()->paginate(15);
        return view('BackEnd.Clients.Worker.Skill.index', compact('skill'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('BackEnd.Clients.Worker.Skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->_id);
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:800',
        ]);

        JobSkill::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('admin.client.worker.skill.all');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        //
        $skill = JobSkill::findOrFail($req->id);
        return view('BackEnd.Clients.Worker.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->_id);
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:800',
        ]);

        $skill = JobSkill::findOrFail($request->_id);
        $skill->title = $request->title;
        $skill->body = $request->body;
        $skill->save();

        return redirect()->route('admin.client.worker.skill.all')->with('success','Item Updated succefully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $skill = JobSkill::findOrFail($request->id);
        $skill->delete();

        return redirect()->route('admin.client.worker.skill.all')->with('success','Item Deleted succefully.');
    }
}
