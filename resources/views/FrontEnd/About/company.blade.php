@extends('FrontEnd.Layouts.app')

@section('title', 'About our Company || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'About')
  @section('crumb-name', 'Company')
  @include('FrontEnd.Layouts.breadcrumb')

     <!-- Section -->
    <section class="container g-pt-100 g-pb-40">
      <div class="row">

        <div class="col-lg-9 g-mb-60">
          <img class="img-fluid g-width-600 g-height-400" src="/assets/img/uploads/company/{{$company->img}}" alt="Nature Green Tech">
        </div>

        <div class="col-lg-9 g-mb-60">
          <div class="mb-4">
            <h2 class="h3 text-uppercase mb-3">{{$company->title}}</h2>
            <div class="g-width-60 g-height-1 g-bg-black"></div>
          </div>
          <div class="mb-5">
            
            {!!$company->body!!}
           
          </div>
          <a class="btn btn-xl u-btn-primary g-font-size-default" href="/about/contact">Contact Us Now</a>
        </div>
      </div>
    </section>
    <!-- End Section -->
    

@endsection