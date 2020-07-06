<?php

namespace App\Http\Controllers\Clients\Affiliate;

use App\Models\Affiliate\Affiliate;
use App\Models\Affiliate\Affiliate_description;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTraits;

class AffiliateDescriptionController extends Controller
{
      use ImageUploadTraits;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affiliate = Affiliate::LatestFirst()->paginate(5);
        return view('BackEnd.Clients.Affiliate.index', compact('affiliate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About\descany  $descany
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $desc = Affiliate_description::first();
        return view('BackEnd.Clients.Affiliate.Description.show', compact('desc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About\descany  $descany
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        //
        $desc = Affiliate_description::findOrFail($req->id);
        return view('BackEnd.Clients.Affiliate.Description.edit', compact('desc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About\descany  $descany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->_id);
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:10000',
            'img' => 'image|mimes:jpeg,png,jpg|max:102400',
        ]);

        $desc = Affiliate_description::findOrFail($request->_id);
        $desc->title = $request->title;
        $desc->body = $request->body;
        $desc->img = $this->imgUpload($request,'img', $desc->img, 'Affiliate/desc');
        $desc->save();

        return redirect()->route('admin.client.affiliate.desc.show')->with('success','Item Updated succefully.');
    }

    

}
