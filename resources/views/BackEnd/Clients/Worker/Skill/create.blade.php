@extends('BackEnd.Layouts.app')

@section('title', 'Create Skill || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Client')
  @section('crumb-name', 'Skill')
  @include('BackEnd.Layouts.breadcrumb')
  
     <!-- Section -->
    <section class="container g-pt-50 g-pb-50">
      <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">

       <div class="col-lg-9 g-mb-60">
          <form action="{{route('admin.client.worker.skill.save')}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

            <div class="row">
              <div class="col-md-7 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Title</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Skill title" name="title" >
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
                <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Description" name="body" id="body" > </textarea>
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('body'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('body') }}</strong>
                    </span>
                @endif
              </small>

            </div>

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