<?php

namespace App\Http\Controllers\Home;

use App\Models\Home\Slider;
use Illuminate\Http\Request;
use App\Home\HomeContent;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTraits;

class SliderController extends Controller
{
    use ImageUploadTraits;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slider::paginate(15);
        return view('BackEnd.Home.Slider.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.Home.Slider.create');
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
            'category' => 'required|string|max:12',
            'body' => 'required|string|max:55',
            'bg_img' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'body_img' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $slide = new Slider;
        $slide->category = $request->category;
        $slide->bg_img = $this->imgUpload($request, 'bg_img', $slide->bg_img, 'Slider');
        $slide->body = $request->body;
        $slide->body_img = $this->imgUpload($request, 'body_img', $slide->body_img,'Slider');
        //dd($slide->bg_img);
        $slide->save();

        return redirect()->route('admin.setting.slider')->with('success', 'Item Added successfully');;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = Slider::findOrFail($id);
        return view('BackEnd.Home.Slider.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
           'category' => 'required|string|max:255',
            'body' => 'required|string',
            'bg_img' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
            'body_img' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $slide = Slider::findOrFail($request->_id);
        $slide->category = $request->category;
        $slide->body = $request->body;
        $slide->bg_img = $this->imgUpload($request,'bg_img', $slide->bg_img, 'Slider');
        $slide->body_img = $this->imgUpload($request,'body_img', $slide->body_img, 'Slider');

        $slide->save();

        return redirect()->route('admin.setting.slider')->with('success', 'Item Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slider::findOrFail($id);
        $slide->delete();
        return redirect()->route('admin.setting.slider')->with('success', 'Item Deleted successfully');
    }
}
