@extends('BackEnd.Layouts.app')

@section('title', 'Edit Greenleaf || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Page')
  @section('crumb-name', 'Greenleaf Edit')
  @include('BackEnd.Layouts.breadcrumb')
  
     <!-- Section -->
    <section class="container g-pt-50 g-pb-50">
      <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">

       <div class="col-lg-7 g-mb-60">
          <form action="{{route('admin.page.greenleaf.update')}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

            <div class="row">
              <div class="col-md-12 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Address</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="About us" name="address" value="{{$leaf->address}}">
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('address'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('address') }}</strong>
                    </span>
                @endif
              </small>

            </div>

            
            <div class="row">
              <div class="col-md-12 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Location</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Location" name="location" value="{{$leaf->location}}">
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('location'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('location') }}</strong>
                    </span>
                @endif
              </small>

            </div>


            <div class="row">
              <div class="col-md-12 form-group g-mb-20">
                <label class="g-color-gray-dark-v2 g-font-size-13">Contact</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="About us" name="contact" value="{{$leaf->contact}}">
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('contact'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('contact') }}</strong>
                    </span>
                @endif
              </small>

            </div>

            <div class="text-right">
                <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" type="submit" role="button">Send
                </button>
            </div>

            <input type="hidden" name="_id" value="{{$leaf->id}}">

        </div>
      </form>
    </div>
  </div>
</section>
<!-- End Section -->

@endsection