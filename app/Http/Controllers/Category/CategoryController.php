<?php

namespace App\Http\Controllers\Category;

use App\Models\Categories\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::LatestFirst()->paginate(15);
        return view('Backend.Category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Backend.Category.create');
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
        //dd($request->all());
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:255',
        ]);

        Category::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('admin.category.index')->with('success','Item Created succefully.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        $category = Category::where('slug', '=', $category->slug)->first();
        return view('Backend.Category.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        $this->validate(request(), [
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:255',
        ]);

        $category = Category::where('slug', '=', $request->_id)->first();
        $category->title = $request->title;
        $category->body = $request->body;
        $category->save();

        return redirect()->route('admin.category.index')->with('success','Item Updated succefully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category = Category::where('slug', '=', $category->slug)->first();
        $category->delete();

        return redirect()->route('admin.category.index');
    }
}
