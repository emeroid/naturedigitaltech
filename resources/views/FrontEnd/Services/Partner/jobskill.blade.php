@extends('FrontEnd.Layouts.app')

@section('title', 'Available Jobs || Nature Digital Tech - Making life easy')

@section('content')

		<!-- Offline training starts -->
        <section class="g-bg-secondary">
          <div class="container g-py-100">
            <div class="mb-4">
              <h2 class="h3 text-uppercase mb-3">All Available Jobs</h2>
              <div class="g-width-60 g-height-1 g-bg-black"></div>
            </div>
          <div class="row justify-content-center g-mb-60">
              <!--Basic Table-->
              <div class="table-responsive">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      <th class="g-font-weight-300 g-color-black"> No.</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200"> Job Title</th>
                      <th class="g-font-weight-300 g-color-black ">Details</th>
                      
                    </tr>
                  </thead>

                  <tbody>
                    @php  $count = 0 @endphp
                    @foreach($skills as $skill)
                      @php  $count++; @endphp

                    <tr>
                      <td class="align-middle"> {{$count}} </td>
                      <td class="align-middle"> {{$skill->title}}</td>
                      
                      <td class="align-middle">
                        <div class="d-flex">
                          <span>{{$skill->body}}</span>
                        </div>
                      </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!--End Basic Table-->
            </div>
        </div>
      </section>
      <!-- Offline training ends -->

      @endsection