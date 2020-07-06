@extends('FrontEnd.Layouts.app')

@section('title', 'Affiliate Profile || Nature Digital Tech - Making life easy')

@section('content')

<section class="g-mb-100">
      <div class="container g-py-100">
        <div class="row">
         <!-- Profle nav bar -->
         	@include('FrontEnd.Affiliate.navbar')
          <!-- Profle Content -->
          <div class="col-lg-9">
            <!-- Start All purchase -->
            <div class="card border-0 g-mb-40">
              <!-- Panel Header -->
              <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                <h3 class="h6 mb-0">
                    <i class="icon-bubbles g-pos-rel g-top-1 g-mr-5"></i>Edit Profile
                  </h3>
              </div>
              <!-- End Panel Header -->

              <!-- Panel Body -->
              <div class="card-block g-pa-0 g-py-50">

      <div class="row justify-content-center">
        <div class="col-md-5">
          <form  action="{{route('affiliate.profile.update')}}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

           <div class="g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Full name</label>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" value="{{$user->name}}" placeholder="samuel edeh" name="full_name">
            </div>

            <div class="g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Your email</label>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="email" disabled="" value="{{$user->email}}" placeholder="samueledeh@gmail.com" name="email">
            </div>

            <div class="g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Address</label>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" value="{{$user->affiliate->address}}" placeholder="Garki, Abuja" name="address">
            </div>

            <div class="g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Phone number</label>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="number" value="{{$user->affiliate->mobile}}" name="mobile" placeholder="+ (234) 222 33 44">
            </div>

            <div class="g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Upload Image</label>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="file" name="img">
            </div>

            <div class="text-left">
            <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" type="submit" role="button">Change</button>
          </div>

          </form>
        </div>
        <div class="col-md-7">
            <div class="g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Password</label>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="password" placeholder="password">
            </div>

            <div class="g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Verify Password</label>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="password" placeholder="verify password">
            </div>
            <input type="hidden" name="_id" value="{{auth()->user()->id}}">

          <div class="text-right">
            <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" type="submit" role="button">Submit</button>
          </div>
        </div>
      </div>

              </div>
              <!-- End Panel Body -->
            </div>
            <!-- End All purchase -->
          </div>
          <!-- End Profle Content -->
        </div>
      </div>
    </section>

    @endsection