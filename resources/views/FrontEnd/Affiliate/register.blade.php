@extends('FrontEnd.Layouts.app')

@section('title', 'Join Affiliate Program || Nature Digital Tech - Making life easy')

@section('content')

<!-- Login & Signup -->
    <section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background-image: url(../../assets/img/home/4.jpg);">
      <div class="container u-bg-overlay__inner">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-8">
            <!-- Heading -->
            <h1 class="g-color-white text-uppercase mb-4">Login or register an account</h1>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-white mb-4"></div>
            <p class="lead g-color-white">Nature Digital also has a simple, achievable and sustainable affliate platform that gives you an opportunity to enjoy a community of technical expert, connect to those who will connect you and to earn big, and enjoy other benefits like free products, which the company sometimes give to only her members.</p>
            <!-- End Heading -->
          </div>
        </div>

        <div class="row justify-content-center align-items-center no-gutters">
          <div class="col-lg-7 g-bg-white g-rounded-right-5--lg-up">
            <div class="g-pa-50">
              <!-- Form -->
              <form class="g-py-15" action="{{route('affiliate.register.save')}}" id="register" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                <h2 class="h3 g-color-black mb-4">Signup</h2>
                <p class="mb-4"> Register for our affiliate program. </p>

                <div class="mb-4">
                  <div class="input-group rounded">
                    <div class="input-group-prepend">
                      <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-finance-128 u-line-icon-pro"></i></span>
                    </div>
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="text" placeholder="Your full name" name="name">
                  </div>

                  <small class="form-control-feedback"> 
                    @if ($errors->has('name'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                  </small>

                </div>

                <div class="mb-4">
                  <div class="input-group rounded">
                    <div class="input-group-prepend">
                      <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-finance-067 u-line-icon-pro"></i></span>
                    </div>
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="number" placeholder="Mobile" name="mobile">
                  </div>

                  <small class="form-control-feedback"> 
                    @if ($errors->has('mobile'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('mobile') }}</strong>
                    </span>
                    @endif
                  </small>

                </div>

                <div class="mb-4">
                  <div class="input-group rounded">
                    <div class="input-group-prepend">
                      <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-communication-062 u-line-icon-pro"></i></span>
                    </div>
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="email" placeholder="Your email" name="email">
                  </div>

                  <small class="form-control-feedback"> 
                    @if ($errors->has('email'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                  </small>
                </div>

                <div class="mb-4">
                  <div class="input-group rounded">
                    <div class="input-group-prepend">
                      <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-communication-062 u-line-icon-pro"></i></span>
                    </div>
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="text" placeholder="Your Address" name="address">
                  </div>

                  <small class="form-control-feedback"> 
                    @if ($errors->has('address'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('address') }}</strong>
                    </span>
                    @endif
                  </small>
                </div>

                <div class="mb-4">
                  <div class="input-group rounded">
                    <div class="input-group-prepend">
                      <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-media-094 u-line-icon-pro"></i></span>
                    </div>
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="password" placeholder="Password" name="password">
                  </div>

                  <small class="form-control-feedback"> 
                    @if ($errors->has('password'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                  </small>
                </div>

                <div class="mb-4">
                  <div class="input-group rounded">
                    <div class="input-group-prepend">
                      <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-media-094 u-line-icon-pro"></i></span>
                    </div>
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="password" placeholder="Verify Password" name="password_confirmation">
                  </div>
                </div>

                <button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit" form="register">Register</button>
              </form>
              <!-- End Form -->

              <a href="{{route('login')}}"> Have an account? login</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Login & Signup -->

    @endsection