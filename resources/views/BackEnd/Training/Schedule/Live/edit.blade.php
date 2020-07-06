@extends('BackEnd.Layouts.app')

@section('title', 'Create Greenleaf || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Training Live')
  @section('crumb-name', 'Training live Create')
  @include('BackEnd.Layouts.breadcrumb')
  
     <!-- Section -->
    <section class="container g-pt-50 g-pb-50">
      <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">

       <div class="col-lg-7 g-mb-60">
          <form action="{{route('admin.training.schedule.live.update')}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

            <div class="row">
              <div class="col-md-12 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Subject</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="subject" name="subject" value="{{$live->subject}}" >
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('subject'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('subject') }}</strong>
                    </span>
                @endif
              </small>

            </div>

            
            <div class="row">
              <div class="col-md-12 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Body</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="body" name="body"  value="{{$live->body}}" >
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
              <div class="col-md-12 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">WhatsApp Link</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="WhatsApp Link" value="{{$live->wha_link}}" name="wha" >
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('wha'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('wha') }}</strong>
                    </span>
                @endif
              </small>

            </div>


            <div class="row">
              <div class="col-md-12 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Contact</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Contact" value="{{$live->contact}}" name="contact" >
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('contact'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('contact') }}</strong>
                    </span>
                @endif
              </small>
              <input type="hidden" name="_id" value="{{$live->id}}">

            </div>

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