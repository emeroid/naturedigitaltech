<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\About\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\ImageUploadTraits;

class CompanyController extends Controller
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
        $comp = Company::first();
        return view('BackEnd.About.Company.show', compact('comp'));
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
        $comp = Company::findOrFail($req->id);
        return view('BackEnd.About.Company.edit', compact('comp'));
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

        $comp = Company::findOrFail($request->_id);
        $comp->title = $request->title;
        $comp->body = $request->body;
        $comp->img = $this->imgUpload($request, 'img', $comp->img, 'company');
        $comp->save();

        return redirect()->route('admin.page.company.show')->with('success','Item Updated succefully.');
    }

    


}
