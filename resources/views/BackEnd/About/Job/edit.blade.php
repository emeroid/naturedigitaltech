@extends('BackEnd.Layouts.app')

@section('title', 'Edit Job Description || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Page')
  @section('crumb-name', 'Job')
  @include('BackEnd.Layouts.breadcrumb')
  
     <!-- Section -->
    <section class="container g-pt-50 g-pb-50">
      <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">

       <div class="col-lg-5 g-mb-60">
          <form action="{{route('admin.page.job.update')}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

            <div class="row">
              <div class="col-md-12 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Title</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="About us" name="title" value="{{$job->title}}">
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('title'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('title') }}</strong>
                    </span>
                @endif
              </small>

            </div>

            <div class="g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Select image</label>
              <div class="col-lg-4"><img class="d-flex g-width-40 g-height-40 rounded-circle g-mr-10" src="../../assets/img/Uploads/Job/{{$job->img}}" alt="{{$job->title}}">
              </div>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="file" name="img" placeholder="Select image file">
            </div>

            <small class="form-control-feedback"> 
              @if ($errors->has('img'))
                  <span class="help-block">
              <strong class="text-danger">{{ $errors->first('img') }}</strong>
                  </span>
                  @endif

              </small>

            <input type="hidden" name="_id" value="{{$job->id}}">

        </div>

        <div class="col-md-7">
          <div class="g-mb-40">
            <label class="g-color-gray-dark-v2 g-font-size-13">Body</label>
            <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="12" id="body" name="body" placeholder="Hi there, I would like to ...">{{$job->body}} </textarea>
          </div>

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