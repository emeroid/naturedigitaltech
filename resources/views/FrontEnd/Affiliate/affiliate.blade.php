@extends('FrontEnd.Layouts.app')

@section('title', 'About Affiliate Program')

@section('content')

  @section('crumb-folder', 'About')
  @section('crumb-name', 'Affiliate')
  @include('FrontEnd.Layouts.breadcrumb')

    <!-- Section -->
    <section class="container g-pt-100 g-pb-40">
      <div class="row">

        <div class="col-lg-9 g-mb-60">
          <img class="img-fluid g-width-600 g-height-400" src="/assets/img/uploads/Affiliate/desc/{{$affiliate->img}}" alt="Nature Green Tech-affiliate">
        </div>

        <div class="col-lg-9 g-mb-60">
          <div class="mb-4">
            <h2 class="h3 text-uppercase mb-3">{{ $affiliate->title}}</h2>
            <div class="g-width-60 g-height-1 g-bg-black"></div>
          </div>
          <div class="mb-5">
            
            {!! $affiliate->body!!}
            
          </div>
          <a class="btn btn-xl u-btn-outline-black g-font-size-default mr-2" href="/affiliate/register">Register Now</a>
          
        </div>
        
      </div>
    </section>
    <!-- End Section -->

@endsection