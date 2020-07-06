@extends('FrontEnd.Layouts.app')

@section('title', 'Request || Nature Digital Tech - Making life easy')

@section('content')

<!-- Request a Skill -->
    <section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background-image: url(../../assets/img/home/7.jpg);">
      <div class="container u-bg-overlay__inner">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-8">
            <!-- Heading -->
            <h1 class="g-color-white text-uppercase mb-4">Request for skill(s)</h1>
            <div class="d-inline-block g-width-35 g-height-2 g-bg-white mb-4"></div>
            
          </div>
        </div>

        <div class="row justify-content-center align-items-center no-gutters">
          
          <div class="col-lg-7 g-bg-white g-rounded-right-5--lg-up">
            <div class="g-pa-50">
              <!-- Form -->
              <form class="g-py-15"  method="POST" action="{{ route('services.skill.request.save') }}">
                        @csrf

                <h2 class="h3 g-color-black mb-4">Skill Request</h2>
                <p class="mb-4">Profitable contracts, invoices &amp; payments for the best cases!</p>

                <div class="mb-4">
                  <div class="input-group rounded">
                    <div class="input-group-prepend">
                      <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-finance-128 u-line-icon-pro"></i></span>
                    </div>
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="text" required="" name="full_name" placeholder="Your full name">
                  </div>

                  <small class="form-control-feedback"> 
                @if ($errors->has('full_name'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('full_name') }}</strong>
                    </span>
                @endif
              </small>

                </div>

                <div class="mb-4">
                  <div class="input-group rounded">
                    <div class="input-group-prepend">
                      <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-finance-067 u-line-icon-pro"></i></span>
                    </div>
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="number" name="mobile" required="" placeholder="Mobile">
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
                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13" type="email" name="email" required="" placeholder="Your email">
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
                      <select class="form-control form-control-md form-control-sm rounded-0" name="state">
                        <option value="">Select State</option>
                        @foreach($states as $state)
                        <option value="{{$state->name}}">{{$state->name}}</option>
                        @endforeach
                      </select>

                      <small class="form-control-feedback"> 
                @if ($errors->has('state'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('state') }}</strong>
                    </span>
                @endif
              </small>
                </div>

                <div class="mb-4">
                      <select class="form-control form-control-md form-control-sm rounded-0" name="skill">
                        <option value="">Select Skill</option>
                        @foreach($skills as $skill)
                        <option value="{{$skill->title}}">{{$skill->title}}</option>
                        @endforeach
                      </select>

                      <small class="form-control-feedback"> 
                @if ($errors->has('skill'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('skill') }}</strong>
                    </span>
                @endif
              </small>
                </div>
                <div class="mb-4">

                    <!-- Textarea Resizable -->
                    <div class="form-group g-mb-20">
                      <textarea id="inputGroup2_2" class="form-control form-control-md rounded-0" rows="5" placeholder="Message" name="msg"></textarea>

                      <small class="form-control-feedback"> 
                @if ($errors->has('msg'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('msg') }}</strong>
                    </span>
                @endif
              </small>
                    </div>
                    <!-- End Textarea Resizable -->

                </div>

                <div class="mb-1">
                  <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-2">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </div>
                    I accept the <a href="#">Terms and Conditions</a>
                  </label>
                </div>

                <button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Submit</button>

                 <div class="mb-3">
                  <div class="d-flex justify-content-center">
                         <a href="/wha"> <i class="fa fa-whatsapp g-font-size-40 g-color-primary g-pos-rel g-top-5 g-mr-7"></i> </a>
                          <span><a href="/fb"> <i class="fa fa-facebook-square g-font-size-40 g-color-blue g-pos-rel g-top-5 g-mr-7"></i></a> </span>
                          <span><a href="/twit"> <i class="fa fa-twitter-square g-font-size-40 g-color-blue g-pos-rel g-top-5 g-mr-7"></i></a></span>
                        </div>
                </div> 
              </form>
              <!-- End Form -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Request a skill -->

    @endsection