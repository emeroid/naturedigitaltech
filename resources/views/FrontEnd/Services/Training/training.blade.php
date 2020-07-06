@extends('FrontEnd.Layouts.app')

@section('title', 'Training || Nature Digital Tech - Making life easy')

@section('content')

		<!-- Offline training starts -->
        <section class="g-bg-secondary">
      	  <div class="container g-py-100">
      	  	<div class="mb-4">
            	<h2 class="h3 text-uppercase mb-3">Offline Training</h2>
            	<div class="g-width-60 g-height-1 g-bg-black"></div>
          	</div>
        	<div class="row justify-content-center g-mb-60">
              <!--Basic Table-->
              <div class="table-responsive">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      <th class="g-font-weight-300 g-color-black">Subject</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200"> Description</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Locations</th>
                      <th class="g-font-weight-300 g-width-150 g-color-black"> Start Date</th>
                      <th class="g-font-weight-300 g-width-150 g-color-black"> End Date</th>
                      <th class="g-font-weight-300 g-color-black">Contacts</th>
                    </tr>
                  </thead>

                  <tbody>

                  @foreach($offlines as $offline)
                    <tr>
                      <td class="align-middle text-nowrap">
                        <h4 class="h6 g-mb-2">{{$offline->subject}}</h4>
                        <div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
                      </td>
                      <td class="align-middle">{!! $offline->body !!}</td>
                      <td class="align-middle">
                        <div class="d-flex">
                          <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                          <span>{!! $offline->location !!}</span>
                        </div>
                      </td>

                      <td class="align-middle">
                        <div class="d-flex">
                          <span>{{\Carbon\Carbon::parse($offline->start_date)->format('d M Y')}} {{\Carbon\Carbon::parse($offline->start_date)->format('g:i A')}} </span>
                          
                        </div>
                      </td>
                      <td class="align-middle">
                        <div class="d-flex">
                        <span> {{\Carbon\Carbon::parse($offline->end_date)->format('d M Y')}} {{\Carbon\Carbon::parse($offline->end_date)->format('g:i A')}} 
                        </span>
                      </div>
                      </td>
                      <td class="align-middle text-nowrap">
                        <span class="d-block g-mb-5">
                          <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i>
                          +1 4768 97655
                        </span>
                        <span class="d-block">
                          <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i>
                          contact@naturegreentech.com
                        </span>
                      </td>
                    </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              </div>

              <div class="row d-sm-flex justify-content-center">
                <div class="col-md-4">{{$offlines->appends(['sort' => 'offline'])->links()}}</div>
            </div>
              <!--End Basic Table-->
            </div>
        </div>
      </section>
      <!-- Offline training ends -->

      <!-- Offline training starts -->
        <section class="g-bg-purple g-color-white g-py-100">
      	  <div class="container">
      	  	<div class="mb-4">
            	<h2 class="h3 text-uppercase mb-3">Online Training</h2>
            	<div class="g-width-60 g-height-1 g-bg-black"></div>
          	</div>
        	<div class="row justify-content-center g-mb-10">
              <!--Basic Table-->
              <div class="table-responsive">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      <th class="g-font-weight-300 g-color-black">Subject</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200"> Description</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Locations</th>
                      </tr>
                  </thead>

                  <tbody>
                    @foreach($onlines as $online)
                    <tr>
                      <td class="align-middle text-nowrap">
                        <h4 class="h6 g-mb-2">{{$online->subject}}</h4>
                        <div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
                      </td>
                      <td class="align-middle">{{$online->body}}</td>
                      <td class="align-middle">
                        <div class="d-flex">
                          <a href="#"> <i class="icon-location-pin g-font-size-18 g-color-white g-pos-rel g-top-5 g-mr-7"></i>
                          <span class="g-color-white">{{$online->location}} </span> </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              <div class="row d-sm-flex justify-content-center">
                <div class="col-md-4">{{$onlines->appends(['sort' => 'online'])->links()}}</div>
            </div>
              <!--End Basic Table-->
            </div>
        </div>
      </section>
      <!-- Offline training ends -->

      <!-- Offline training starts -->
          <section class="g-bg-secondary">
      	  <div class="container g-py-100">
      	  	<div class="mb-4">
            	<h2 class="h3 text-uppercase mb-3">Live Chat an Expert</h2>
            	<div class="g-width-60 g-height-1 g-bg-black"></div>
          	</div>
        	<div class="row justify-content-center g-mb-60">
              <!--Basic Table-->
              <div class="table-responsive">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      <th class="g-font-weight-300 g-color-black">Subject</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200"> Description</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Social Media</th>
                      <th class="g-font-weight-300 g-color-black">Contacts</th>
                    </tr>
                  </thead>

                  <tbody>

                    @foreach($lives as $live)
                    <tr>
                      <td class="align-middle text-nowrap">
                        <h4 class="h6 g-mb-2">{{$live->subject}}</h4>
                        <div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
                      </td>
                      <td class="align-middle">{{$live->body}}</td>
                      <td class="align-middle">
                        <div class="d-flex justify-content-center">
                         <a href="{{$live->wha_link}}"> <i class="fa fa-whatsapp g-font-size-40 g-color-primary g-pos-rel g-top-5 g-mr-7"></i> </a>
                          
                        </div>
                      </td>
                      <td class="align-middle text-nowrap">
                        <span class="d-block g-mb-5">
                          <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i>
                          {{$live->contact}}
                        </span>
                        
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              <div class="row d-sm-flex justify-content-center">
                <div class="col-md-4">{{$lives->appends(['sort' => 'live'])->links()}}</div>
            </div>
              <!--End Basic Table-->
            </div>
        </div>
      </section>
      <!-- Offline training ends -->


            <div class="shortcode-scripts">
              <!-- JS Unify -->
              <script  src="../../assets/js/components/hs.rating.js"></script>

              <!-- JS Plugins Init. -->
              <script >
                $(document).ready(function () {
                  // Rating
                  $.HSCore.components.HSRating.init($('.js-rating'), {
                    spacing: 2
                  });
                });
              </script>
            </div>
          @endsection