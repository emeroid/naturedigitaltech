 @extends('FrontEnd.Layouts.app')

@section('title', 'Payment Successfull')

@section('top-bar')
    @include('FrontEnd.Products.layout.nav')
@endsection

@section('content')

<!-- Hero Info #05 -->
<section class="g-py-50--md g-py-80"> 
      <div class="container g-py-50">
        <div class="u-shadow-v19 g-max-width-645 g-brd-around g-brd-gray-light-v4 text-center rounded mx-auto g-pa-30 g-pa-50--md">
          

          <div class="mb-5">
            <h2 class="mb-4">Your Order Failed!</h2>
            <p>Please Try again later. </p>
          </div>

          <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="/product/items">Continue Shopping</a>
        </div>
      </div>
</section>

    @stop

             <!-- Main content section ends-->