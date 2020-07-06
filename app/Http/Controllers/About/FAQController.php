<?php

namespace App\Http\Controllers;

use App\Models\About\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faq = FAQ::LatestFirst()->paginate(10);
        return view('BackEnd.About.faq.index', compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('BackEnd.About.faq.create');
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
            'q' => 'required|string',
            'a' => 'required|string',
        ]);

        FAQ::create([
            'q' => $request->q,
            'a' => $request->a
        ]);

        return redirect()->route('admin.page.faq.index')->with('success','Item Was succefully created.');
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
        $faq = FAQ::findOrFail($req->id);
        return view('BackEnd.About.faq.edit', compact('faq'));
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
            'q' => 'required|string',
            'a' => 'required|string',
        ]);

        $faq = FAQ::findOrFail($request->_id);
        $faq->q = $request->q;
        $faq->a = $request->a;
        $faq->save();

        return redirect()->route('admin.page.faq.index')->with('success','Item Updated succefully.');
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
        $faq = FAQ::findOrFail($request->id);
        $faq->delete();

        return redirect()->route('admin.page.faq.index')->with('success','Item Deleted succefully.');
    }
}
