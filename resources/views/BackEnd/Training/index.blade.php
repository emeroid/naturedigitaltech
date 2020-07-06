@extends('BackEnd.Layouts.app')

@section('title', 'Training || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Training')
  @section('crumb-name', 'Trainees')
  @include('FrontEnd.Layouts.breadcrumb')

         <!-- Section -->
<section class="container g-pt-50 g-pb-50">
  <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">
    <div class="container g-py-15 g-px-15">
    <div class="row g-pt-10 g-pb-10">
    <div class="col-md-2">
      
    </div>

    <div class="col-md-3">
      <a class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" href="{{route('admin.training.schedule.live.index')}}">Live Schedule</a>
    </div>

    <div class="col-md-3">
      <a class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" href="{{route('admin.training.schedule.offline.index')}}">Offline Schedule</a>
    </div>

    <div class="col-md-3">
      <a class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" href="{{route('admin.training.schedule.online.index')}}">Online Schedule</a>
    </div>
   </div>

            
              <!--Basic Table-->
              <div class="table-responsive col-md-12">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      <th class="g-font-weight-300 g-color-black">No.</th>
                      <th class="g-font-weight-300 g-color-black">Full Name</th>
                      
                      <th class="g-font-weight-300 g-color-black">Mobile</th>
                      <th class="g-font-weight-300 g-color-black">Email</th>
                      <th class="g-font-weight-300 g-color-black">State</th>
                      <th class="g-font-weight-300 g-color-black">Skill</th>
                      <th class="g-font-weight-300 g-color-black">Actions</th>
                    </tr>
                  </thead>

                  <tbody>
                    
              @foreach($training as $train)
              <tr>
              <td class="align-middle"> {{$train->id}} </td>
              <td class="align-middle"> {{$train->full_name}} </td>
              <td class="align-middle"> {{$train->mobile}} </td>
              <td class="align-middle"> {{$train->email}} </td>
              <td class="align-middle"> {{$train->state->name}} </td>
              <td class="align-middle"> {{$train->skill->title}} </td>
                      
              <td class="align-middle text-nowrap text-center">
                       
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover g-pa-5" href="#" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                          <i class="icon-trash g-font-size-18 g-mr-7"></i>
                        </a>
                      </td>

                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!--End Basic Table-->

              <div class="row justify-content-center">
                <div class="col-md-3">{{$training->links()}}</div>
              </div>
            </div>
  </div>
</section>
<!-- End Section -->

@endsection