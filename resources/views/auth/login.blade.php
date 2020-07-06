@extends('FrontEnd.Layouts.app')

@section('title', ' Login Area || Nature Digital Tech - Making life easy')

@section('content')

<!-- Login & Signup -->
    <section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background-image: url(../../assets/img/home/4.jpg);">
      <div class="container u-bg-overlay__inner">

        <div class="row justify-content-center align-items-center no-gutters">
          <div class="col-lg-7 g-bg-teal g-rounded-left-5--lg-up">
            <div class="g-pa-50">

              <small class="form-control-feedback"> 
                    @error('password')
                    <span class="help-block">
                      <strong class="text-danger">{{ $message }}</strong>
                    </span>
                    @enderror
                </small>

                <small class="form-control-feedback"> 
                    @error('email')
                    <span class="help-block">
                      <strong class="text-danger">{{ $message }}</strong>
                    </span>
                    @enderror
                </small>

                
              <!-- Form -->
              @isset($url)
                  <form method="POST" action='{{ url("$url/login") }}' aria-label="{{ __('Login') }}">
              @else
                  <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
              @endisset
                        @csrf
                <h2 class="h3 g-color-white mb-4">{{ isset($url) ? ucwords($url) : ""}} Login </h2>
                <div class="mb-4">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text g-width-45 g-brd-right-none g-brd-white g-color-white"><i class="icon-finance-067 u-line-icon-pro"></i></span>
                    </div>
                    <input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="email" name="email" value="{{old('email')}}" placeholder="Email">
                  </div>
                </div>

                <div class="g-mb-40">
                  <div class="input-group rounded">
                    <div class="input-group-prepend">
                      <span class="input-group-text g-width-45 g-brd-right-none g-brd-white g-color-white"><i class="icon-communication-062 u-line-icon-pro"></i></span>
                    </div>
                    <input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="password" name="password" value="{{old('password')}}" placeholder="Password">
                  </div>
                </div>


                <div class="g-mb-60">
                  <button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Login</button>
                </div>

              </form>
              <!-- End Form -->
              <a href="{{route('password.update')}}" class="g-color-white">Forgot password?</a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- End Login & Signup -->

    @endsection