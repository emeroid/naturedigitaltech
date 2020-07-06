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
          <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary rounded-circle g-pa-15 mb-5">
            <svg width="30" height="30" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 497.5 497.5" style="enable-background:new 0 0 497.5 497.5;" xml:space="preserve">
              <g>
                <path d="M487.75,78.125c-13-13-33-13-46,0l-272,272l-114-113c-13-13-33-13-46,0s-13,33,0,46l137,136
                  c6,6,15,10,23,10s17-4,23-10l295-294C500.75,112.125,500.75,91.125,487.75,78.125z" fill="#fff"/>
              </g>
            </svg>
          </span>

          <div class="mb-5">
            <h2 class="mb-4">Your Order is Completed!</h2>
            <p>Thank you for your order! Your order is being processed and will be completed within 3-6 hours.</p>
          </div>

          <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="/product/items">Continue Shopping</a>
        </div>
      </div>
    </section>

    @stop

             <!-- Main content section ends-->