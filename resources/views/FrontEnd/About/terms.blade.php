@extends('FrontEnd.Layouts.app')

@section('title', 'About our Terms and condition')

@section('content')

  @section('crumb-folder', 'About')
  @section('crumb-name', 'Terms and condition')
  @include('FrontEnd.Layouts.breadcrumb')

    <!-- Section -->
    <section class="container g-pt-100 g-pb-40">
      <div class="row">
        <div class="col-lg-10 g-mb-60">
          <div class="mb-4">
            <h2 class="h3 text-uppercase mb-3">Our Terms and Condition</h2>
            <div class="g-width-60 g-height-1 g-bg-black"></div>
          </div>
          <div class="mb-5">
            
            {!! $term->body !!}
            
          </div>
          <a class="btn btn-xl u-btn-primary g-font-size-default" href="/about/contact">Contact Us Now</a>
        </div>
      </div>
    </section>
    <!-- End Section -->

@endsection