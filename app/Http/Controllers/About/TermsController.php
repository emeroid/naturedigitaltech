<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Term\Terms;

class TermsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $term = Terms::first();
        return view('BackEnd.About.Term.show', compact('term'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $term = Terms::findOrFail($id);
        return view('BackEnd.About.Term.edit', compact('term'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->_id);
        $this->validate($request, [
            'body' => 'required|string|max:12000',
        ]);

        $term = Terms::findOrFail($request->_id);
        $term->body =  $request->body;
        $term->save();

        return redirect()->route('admin.page.terms')->with('success','Item Was succefully updated.');
    }


}