@extends('FrontEnd.Layouts.app')

@section('title', 'Affiliate Referer || Nature Digital Tech - Making life easy')

@section('content')

<section class="g-mb-100">
      <div class="container g-py-100">
        <div class="row">
         <!-- Profle nav bar -->
          @include('FrontEnd.Affiliate.navbar')
          <!-- Profle Content -->

          <!-- Profle Content -->
          <div class="col-lg-9">
            <!-- Start All purchase -->
            <div class="card border-0 g-mb-40">
              <!-- Panel Header -->
              <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                <h3 class="h6 mb-0">
                    <i class="icon-bubbles g-pos-rel g-top-1 g-mr-5"></i>All Referrals
                  </h3>
              </div>
              <!-- End Panel Header -->

              <!-- Panel Body -->
              <div class="card-block g-pa-0">
                <div class="media g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-20">
                  <div class="media-body">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center g-mb-15 g-mb-10--sm">
                      <h5 class="h4 g-font-weight-300 g-mr-10 g-mb-5 g-mb-0--sm">Referer Link</h5>
                    </div>

                    <p>Below are your referrals and your referrer link. Copy your link Or share it on social media.</p>
                    <hr />
                    <div class="g-bg-gray-light-v5 g-font-size-20">Your Referrer Link: <code> {{url('/')}}/product/items/?ref={{auth()->user()->id}} </code> 
                    </div>
                    <!--Basic Table-->
              <div class="table-responsive">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Name</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Email</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Comission(5%)</th>
                      <th class="g-font-weight-300 g-color-black">Status</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($referer as $ref)
                       @foreach($order as $ord)
                          @foreach($ord->orderDetails as $detail)
                    <tr>
                      <td class="align-middle">{{$ref->name}}</td>
                      <td class="align-middle">{{$ref->email}}</td>
                      <td class="align-middle">
                        <div class="d-flex">
                          <span>&#8358;{{number_format($detail->price * 5 / 100)}}</span>
                        </div>
                      </td>
                     <td class="align-middle">
                        <a class="btn btn-block u-btn-orange g-rounded-50 g-py-5" href="#">
                          Transit
                        </a>
                      </td>
                    </tr>
                        @endforeach
                      @endforeach
                    @endforeach

                  </tbody>
                </table>
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