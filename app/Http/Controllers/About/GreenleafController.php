<?php

namespace App\Http\Controllers\About;

use App\Models\Greenleaf\Greenleaf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\ImageUploadTraits;
use App\Http\Controllers\Controller;

class GreenleafController extends Controller
{
    use ImageUploadTraits;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $leaf = Greenleaf::get();
        return view('Backend.About.Greenleaf.index', compact('leaf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Backend.About.Greenleaf.create');
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
            'address' => 'required|string',
            'location' => 'required|string',
            'contact' => 'required|string',
        ]);

        Greenleaf::create([
            'address' => $request->address,
            'location' => $request->location,
            'contact' => $request->contact
        ]);

        return redirect()->route('admin.page.greenleaf.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Greenleaf\Greenleaf  $greenleaf
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $leaf = Greenleaf::findOrFail($request->id);
        return view('Backend.About.Greenleaf.edit', compact('leaf'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Greenleaf\Greenleaf  $greenleaf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $this->validate($request, [
            'address' => 'required|string',
            'location' => 'required|string',
            'contact' => 'required|string',
        ]);

        $leaf = Greenleaf::findOrFail($request->id);
        $leaf->address = $request->address;
        $leaf->location = $request->location;
        $leaf->contact = $request->contact;

        return redirect()->route('admin.page.greenleaf.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Greenleaf\Greenleaf  $greenleaf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $leaf = Greenleaf::findOrFail($request->id);
        $leaf->delete();

        return redirect()->route('admin.page.greenleaf.index');
    }
}
