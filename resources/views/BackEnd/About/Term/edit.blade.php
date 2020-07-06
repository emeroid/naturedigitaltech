@extends('BackEnd.Layouts.app')

@section('title', 'Edit Terms || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Page')
  @section('crumb-name', 'Term')
  @include('BackEnd.Layouts.breadcrumb')
  
     <!-- Section -->
    <section class="container g-pt-50 g-pb-50">
      <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">

       <div class="col-lg-7 g-mb-60">
          <form action="{{route('admin.page.terms.update')}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

          <div class="g-mb-40">
            <label class="g-color-gray-dark-v2 g-font-size-13">Content</label>
            <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="12" id="body" name="body" >{{$term->body}} </textarea>
          </div>

           <input type="hidden" name="_id" value="{{$term->id}}">

          <small class="form-control-feedback"> 
              @if ($errors->has('body'))
                  <span class="help-block">
              <strong class="text-danger">{{ $errors->first('body') }}</strong>
                  </span>
                  @endif

              </small>

          <div class="text-right">
            <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" type="submit" role="button">Send
            </button>
          </div>
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