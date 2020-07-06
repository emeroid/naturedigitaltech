<?php

namespace App\Http\Controllers\About;

use App\Models\Jobs\AboutJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\ImageUploadTraits;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    use ImageUploadTraits;
    
    /**
     * Display the specified resource.
     *
     * @param  \App\About\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $job = AboutJob::first();
        return view('BackEnd.About.Job.show', compact('job'));
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
        $job = AboutJob::findOrFail($req->id);
        return view('BackEnd.About.Job.edit', compact('job'));
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
            'body' => 'required|string|max:10000',
            'img' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $job = AboutJob::findOrFail($request->_id);
        $job->title = $request->title;
        $job->body = $request->body;
        $job->img = $this->imgUpload($request,'img', $job->img, 'Job');
        $job->save();

        return redirect()->route('admin.page.job.show')->with('success','Item Updated succefully.');
    }
}
