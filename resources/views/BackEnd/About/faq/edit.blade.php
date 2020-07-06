@extends('BackEnd.Layouts.app')

@section('title', 'Edit FAQ || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Page')
  @section('crumb-name', 'FAQ')
  @include('BackEnd.Layouts.breadcrumb')
  
     <!-- Section -->
    <section class="container g-pt-50 g-pb-50">
      <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">

       <div class="col-lg-9 g-mb-60">
          <form action="{{route('admin.page.faq.update')}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

            <div class="row">
              <div class="col-md-7 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Question</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Ask Question" name="q" value="{{$faq->q}}">
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('q'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('q') }}</strong>
                    </span>
                @endif
              </small>

            </div>

          <div class="col-md-7">
          <div class="g-mb-40">
            <label class="g-color-gray-dark-v2 g-font-size-13">Answer</label>
            <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="12" id="a" name="a" > {{$faq->a}} </textarea>
          </div>

          <small class="form-control-feedback"> 
              @if ($errors->has('a'))
                  <span class="help-block">
              <strong class="text-danger">{{ $errors->first('a') }}</strong>
                  </span>
                  @endif

              </small>

              <input type="hidden" name="_id" value="{{$faq->id}}">

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
    
  CKEDITOR.replace( 'a' );
  
</script>

@stop