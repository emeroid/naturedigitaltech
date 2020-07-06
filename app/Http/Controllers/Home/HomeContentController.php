<?php

namespace App\Http\Controllers\Home;

use App\Models\Home\HomeContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use \App\Models\Home\HomeContent;
//use App\Models\Home\Slider;
use App\Traits\ImageUploadTraits;

class HomeContentController extends Controller
{

    use ImageUploadTraits;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = HomeContent::paginate(15);
        return view('BackEnd.Home.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.Home.create');
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
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'bg_color' => 'required|string|max:255',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:102400',
            'btn_link' => 'required|string|max:255',
        ]);

            $home = new HomeContent;
            $home->title = $request->title;
            $home->body = $request->body;
            $home->bg = $request->bg_color;
            $home->img = $this->imgUpload($request, 'img', $home->img, 'Home');
            $home->link = $request->btn_link;
            $home->save();

        return redirect()->route('admin.setting.home.content')->with('success', 'Item Added successfully');;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home = HomeContent::findOrFail($id);
        return view('BackEnd.Home.edit', compact('home'));
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
            'title' => 'required|string|unique:home_contents'.',id,'.$request->_id.'max:255',
            'body' => 'required|string',
            'bg_color' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:102400',
            'btn_link' => 'required|string|max:255',
        ]);

            $home = HomeContent::findOrFail($request->_id);
            $home->title = $request->title;
            $home->body = $request->body;
            $home->bg = $request->bg_color;
            $home->img = $this->imgUpload($request, 'img', $home->img, 'Home');
            $home->link = $request->btn_link;
            $home->save();
        

        return redirect()->route('admin.setting.home.content')->with('success', 'Item Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home\HomeContent  $homeContent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home = HomeContent::findOrFail($id);
        $home->delete();
        return redirect()->route('admin.setting.home.content')->with('success', 'Item Deleted successfully');
    }
}
