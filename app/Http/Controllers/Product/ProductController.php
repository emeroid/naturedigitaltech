<?php

namespace App\Http\Controllers\Product;

use App\Models\Products\product;
use App\Models\Products\productImage;
use App\Models\State\All_state;
use Illuminate\Http\Request;
use App\Models\Categories\category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Traits\ImageMultiUploadTraits;


class ProductController extends Controller
{

    use ImageMultiUploadTraits;

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $state = All_state::get();
        $product = product::LatestFirst()->paginate(5);
        return view('Backend.Products.index', compact('product','state'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = category::LatestFirst()->get();
        return view('Backend.Products.create', compact('category'));
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

        /*$msg = [
            'img.required' => 'Image is required',
            'img.image' => 'The Image type must be an image',
            'img.max' => 'The Image size should not be more than 10mb',
            'img.mimes' => 'The Image file type must be png, jpg, jpeg',
        ];*/


        $rules = [
            'name' => 'required|string|regex:/^[0-9A-Za-z ]*$/i|unique:products',
            'price' => 'required|string|regex:/^[0-9]*$/i',
            'category' => 'required|regex:/^[0-9]*$/i',
            'img' => 'required|max:102400',
            'img.*' => 'image|mimes:jpeg,png,jpg',
            'excerpt' => 'required|string|max:800',
            'body' => 'required|string',
        ];

        //dd($request->all());
        $this->validate($request, $rules);
        

        $product = product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
        ]);

        
            $images = $this->imgMultiUpload($request, 'products');
            //dd($images);
            foreach($images as $key){

                //dd($key);
                productImage::create([
                    'product_id' => $product->id,
                    'img' => $key,
                ]);
            }
        

        return redirect()->route('admin.product.index')->with('success', 'Product was added successfuly');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
        $category = category::get();
        //$product = product::where('slug', '=', $product->slug)->first();
        return view('Backend.Products.edit', compact('product', 'category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

       $rules = [
            'name' => 'required|string|regex:/^[0-9A-Za-z ]*$/i|unique:products'. ',id,' . $request->_id,
            'price' => 'required|string|regex:/^[0-9]*$/i',
            'category' => 'required|regex:/^[0-9]*$/i',
            'img' => 'nullable|max:102400',
            'img.*' => 'image|mimes:jpeg,png,jpg',
            'excerpt' => 'required|string|max:800',
            'body' => 'required|string',
        ];

        //dd($request->all());
        //$rules['name'] = $rules['name']. ',id,' . $request->_id;
        $this->validate($request, $rules);

            $product = product::find($request->_id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->category_id = $request->category;
            $product->excerpt = $request->excerpt;
            $product->body = $request->body;
            $product->save();
        
            $images = $this->imgMultiUpload($request, 'products');
            //dd($images);
            foreach($images as $key){

                productImage::create([
                    'product_id' => $product->id,
                    'img' => $key,
                ]);
            }

        return redirect()->route('admin.product.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product\product  $product
     * @return \Illuminate\Http\Response
     **/
    public function destroy(product $product)
    {
        //
        //$product = product::where('slug', '=', $product->slug)->first();
        $product->delete();
        return redirect()->route('admin.product.index')->with('success','Item deleted successfully');
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product\product  $product
     * @return \Illuminate\Http\Response
     **/
    public function deleteImage(Request $request)
    {
        $image = productImage::find($request->id);
        $image->delete();

        return redirect()->back()->with('success','Item deleted successfully');
    }

}
