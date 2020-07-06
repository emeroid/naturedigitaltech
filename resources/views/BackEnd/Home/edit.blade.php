@extends('BackEnd.Layouts.app')

@section('title', 'Edit Home Content || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Home Content')
  @section('crumb-name', 'Home')
  @include('BackEnd.Layouts.breadcrumb')
  
     <!-- Section -->
    <section class="container g-pt-50 g-pb-50">
      <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">

       <div class="col-lg-12 g-mb-60">
          <form action="{{route('admin.setting.home.update')}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

            <div class="row">
              <div class="col-md-7 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Title</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Title" name="title" value="{{$home->title}}" >
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('title'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('title') }}</strong>
                    </span>
                @endif
              </small>

            </div>

            <div class="row">
              <div class="col-md-7 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Description</label>
                <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Category Description" name="body" id="body" > {{$home->body}}</textarea>
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('body'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('body') }}</strong>
                    </span>
                @endif
              </small>

            </div>

            <div class="row">
              <div class="col-md-7 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Image</label>
                
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="file" name="img" >
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('img'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('img') }}</strong>
                    </span>
                @endif
              </small>

            </div>

            <div class="row">
              <div class="col-md-7 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Backgroud Color</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Type your color here" name="bg_color" value="{{$home->bg}}" >
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('bg_color'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('bg_color') }}</strong>
                    </span>
                @endif
              </small>

            </div>

            <div class="row">
              <div class="col-md-7 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Button Link</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Select color" name="btn_link" value="{{$home->link}}" >
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('btn_link'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('btn_link') }}</strong>
                    </span>
                @endif
              </small>

            </div>
            <input type="hidden" name="_id" value="{{$home->id}}">

          <div class="text-right">
            <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" type="submit" role="button">Send
            </button>
          </div>

      </form>
    </div>
  </div>
</section>
<!-- End Section -->

@endsection

@section('js')

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script>
    
  CKEDITOR.replace( 'body' );

</script>

@stop