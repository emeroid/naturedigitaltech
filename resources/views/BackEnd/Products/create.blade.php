@extends('BackEnd.Layouts.app')

@section('title', 'Create Product || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Product')
  @section('crumb-name', 'Create product')
  @include('BackEnd.Layouts.breadcrumb')
  
     <!-- Section -->
    <section class="container g-pt-50 g-pb-50">
      <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">

       <div class="col-lg-12 g-mb-60">
          <form action="{{route('admin.product.save')}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

            <div class="row">
              <div class="col-md-7 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Name</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Product name" name="name" value="{{old('name')}}" >


              <small class="form-control-feedback"> 
                @if ($errors->has('name'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </small>

              </div>


            </div>

             <div class="row">
              <div class="col-md-7 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Price</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="number" placeholder="Product price" name="price" value="{{old('price')}}" >

                <small class="form-control-feedback"> 
                @if ($errors->has('price'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('price') }}</strong>
                    </span>
                @endif
              </small>
              </div>

            </div>

              <div class="row">
              <div class="col-md-7 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">category</label>
                <select class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" placeholder="Product category" name="category" >
                    @foreach($category as $cat)
                      <option value="{{$cat->id}}">{{$cat->title}}</option>
                    @endforeach
                </select>

                <small class="form-control-feedback"> 
                @if ($errors->has('category'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('category') }}</strong>
                    </span>
                @endif
              </small>

              </div>

            </div>


              <div class="row">
                <div class="col-md-7 form-group g-mb-20">
                  <label class="g-color-gray-dark-v2 g-font-size-13">Add Image(s)</label>
                  
                  <div id="images">
                    <small class="form-control-feedback"> 
                  @if ($errors->has('img'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('img') }}</strong>
                    </span>
                  @endif
                </small>
                    
                  </div>

                <div class="row g-mt-10">
                <div class="col-md-9">
                <button class="btn u-btn-blue g-font-weight-400 g-font-size-11 text-uppercase rounded-3 g-py-12 g-px-35" type="button" id="add"> Add More Image
                </button>
              </div>
                </div>

            </div>
          </div>

              <div class="row">
              <div class="col-md-7 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Excerpt</label>
                <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Product Excerpt" name="excerpt" rows="5" id="excerpt" > {{old('excerpt')}} </textarea> 

                <small class="form-control-feedback"> 
                @if ($errors->has('excerpt'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('excerpt') }}</strong>
                    </span>
                @endif
              </small>

              </div>
            </div>

            <div class="row">
              <div class="col-md-7 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Description</label>
                <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Product Description" name="body" rows="10" id="body" > {{old('body')}} </textarea>

                <small class="form-control-feedback"> 
                @if ($errors->has('body'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('body') }}</strong>
                    </span>
                @endif
              </small>

              </div>

            </div>

          <div class="text-right">
            <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" type="submit" role="button">Send
            </button>
          </div>

      </form>
    
  </div>
</section>
<!-- End Section -->

@endsection

@section('js')
<script>

$(document).ready(function(){
   let i = 1;
      
  $('#add').click(function(){ 

      $('#images').append('<input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="file" name="img[]" id="img'+i+'">');

      i++;

  }); 

}); 

 </script> 

 <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script>
    
  CKEDITOR.replace( 'body' );

  CKEDITOR.replace( 'excerpt' );

</script>



@stop