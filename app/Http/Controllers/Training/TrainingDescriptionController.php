<?php

namespace App\Http\Controllers\Training;

use App\Models\Training\Training_description;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Traits\ImageUploadTraits;


class TrainingDescriptionController extends Controller
{
    use ImageUploadTraits;

    /**
     * Display the specified resource.
     *
     * @param  \App\Training\Training_description  $Training_description
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $train_desc = Training_description::first();
        return view('BackEnd.Training.Description.show', compact('train_desc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training\Training_description  $Training_description
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        //
        $train_desc = Training_description::findOrFail($req->id);
        return view('BackEnd.Training.Description.edit', compact('train_desc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Training\Training_description  $Training_description
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->_id);
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:10000',
            'img' => 'image|max:10240|mimes:jpeg,png,jpg',
        ]);

        $train_desc = Training_description::findOrFail($request->_id);
        $train_desc->title = $request->title;
        $train_desc->body = $request->body;
        $train_desc->img = $this->imgUpload($request,'img', $train_desc->img, 'Training/description');
        $train_desc->save();

        return redirect()->route('admin.training.description.show')->with('success','Item Updated succefully.');
    }

    

}
