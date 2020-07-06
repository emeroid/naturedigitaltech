@extends('FrontEnd.Layouts.app')

@section('title', 'Greenleaf store || Nature Digital Tech - Making life easy')

@section('content')

		<!-- Offline training starts -->
        <section class="g-bg-secondary">
      	  <div class="container g-py-100">
      	  	<div class="mb-4">
            	<h2 class="h3 text-uppercase mb-3">Greenleaf Service Address</h2>
            	<div class="g-width-60 g-height-1 g-bg-black"></div>
          	</div>
        	<div class="row justify-content-center g-mb-60">
              <!--Basic Table-->
              <div class="table-responsive">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      <th class="g-font-weight-300 g-color-black g-min-width-200"> Address</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Locations</th>
                      <th class="g-font-weight-300 g-color-black">Contacts</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      
                      <td class="align-middle">Nulla ipsum dolor sit amet, consectetur adipiscing elitut eleifend nisl.</td>
                      <td class="align-middle">
                        <div class="d-flex">
                          <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                          <span>Abuja</span>
                        </div>
                      </td>
                      <td class="align-middle text-nowrap">
                        <span class="d-block g-mb-5">
                          <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i>
                          +234(0)8175842817
                        </span>
                        <span class="d-block">
                          <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i>
                          contact@naturegreentech.com
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td class="align-middle">In consectetur adipiscing hac habitasse platea dictumst, curabitur hendrerit.</td>
                      <td class="align-middle">
                        <div class="d-flex">
                          <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                          <span>Lagos</span>
                        </div>
                      </td>
                      <td class="align-middle text-nowrap">
                        <span class="d-block g-mb-5">
                          <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i>
                          +234(0)8175842817
                        </span>
                        <span class="d-block">
                          <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i>
                          users@naturegreentech.com
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td class="align-middle">To a general advertiser outdoor advertising is worthy of consideration..</td>
                      <td class="align-middle">
                        <div class="d-flex">
                          <i class="icon-location-pin g-font-size-18 g-color-gray-dark-v5 g-pos-rel g-top-5 g-mr-7"></i>
                          <span>Port Harcourt</span>
                        </div>
                      </td>
                      <td class="align-middle text-nowrap">
                        <span class="d-block g-mb-5">
                          <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i>
                          +234(0)8175842817
                        </span>
                        <span class="d-block">
                          <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i>
                          clients@naturegreentech.com
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--End Basic Table-->
            </div>
        </div>
      </section>
      <!-- Offline training ends -->

      @endsection