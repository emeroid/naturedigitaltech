@extends('FrontEnd.Layouts.app')

@section('title', 'Affiliate Home || Nature Digital Tech - Making life easy')

@section('content')

<section class="g-mb-50">
      <div class="container g-py-100">
        <div class="row">
         <!-- Profle nav bar -->
          @include('FrontEnd.Affiliate.navbar')
          <!-- Profle Content -->

          <div class="col-lg-10 mb-5">
            <!-- Start All purchase -->
            <div class="card border-0 g-mb-40">
              <!-- Panel Header -->
              <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                <h3 class="h6 mb-0">
                    <i class="icon-bubbles g-pos-rel g-top-1 g-mr-5"></i>All Order
                  </h3>
              </div>
              <!-- End Panel Header -->
             
              <!--Basic Table-->
              <div class="table-responsive">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Tracking No.</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Product</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Qty</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Price</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Address</th>
                      <th class="g-font-weight-300 g-color-black">Status</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($orders as $order)
                    @php 
                      $detail = "";
                      foreach($order->orderDetails as $pro){
                        $detail = $pro;
                      }
                    @endphp
                    <tr>
                      <td class="align-middle">{{$order->id}}</td>
                      <td class="align-middle">{{$detail->product->name}}</td>
                      <td class="align-middle">{{$detail->qty}}</td>
                      <td class="align-middle">{{number_format($detail->price)}}</td>
                      
                      <td class="align-middle">
                        <div class="d-flex">
                          <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                          <span></span>
                        </div>
                      </td>
                     <td class="align-middle">
                        <a class="btn btn-block u-btn-orange g-rounded-50 g-py-5" href="#">
                          Transit
                        </a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!--End Basic Table-->
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
