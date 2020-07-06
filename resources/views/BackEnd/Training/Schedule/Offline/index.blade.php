@extends('BackEnd.Layouts.app')

@section('title', 'Training Schedule offline || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Training')
  @section('crumb-name', 'offline')
  @include('FrontEnd.Layouts.breadcrumb')

         <!-- Section -->
<section class="container g-pt-50 g-pb-50">
  <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">
            <div class="row">
              <a class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" href="{{route('admin.training.schedule.offline.create')}}">Create New</a>
            </div>
              <!--Basic Table-->
              <div class="table-responsive col-md-12">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      <th class="g-font-weight-300 g-color-black">No.</th>
                      <th class="g-font-weight-300 g-color-black">Subject</th>
                      
                      <th class="g-font-weight-300 g-color-black">Body</th>
                      <th class="g-font-weight-300 g-color-black">Location</th>

                      <th class="g-font-weight-300 g-color-black">Contact</th>

                      <th class="g-font-weight-300 g-color-black">Start Date</th>

                      <th class="g-font-weight-300 g-color-black">End Date</th>
                      
                      <th class="g-font-weight-300 g-color-black">Actions</th>
                    </tr>
                  </thead>

                  <tbody>
                    @php $counter = 0; @endphp
                    @foreach($offline as $off)
                      @php $counter ++; @endphp
                    <tr>

                      <td class="align-middle"> {{$counter}} </td>
                      <td class="align-middle"> {{$off->subject}} </td>
                       
                      <td class="align-middle"> {{substr($off->body, 0, 70)}}.... </td>

                      <td class="align-middle"> {{$off->location}} </td>
                      <td class="align-middle"> {{$off->contact}} </td>


                      <td class="align-middle"> {{$off->start_date}} </td>

                      <td class="align-middle"> {{$off->end_date}} </td>
                       
                      
                      <td class="align-middle text-nowrap text-center">
                       
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover g-pa-5" href="{{route('admin.training.schedule.offline.edit', $off->id)}}" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                          <i class="icon-pencil g-font-size-18 g-mr-7"></i>
                        </a>

                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover g-pa-5" href="{{route('admin.training.schedule.offline.delete', $off->id)}}" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
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
                <div class="col-md-3">{{$offline->links()}}</div>
              </div>
            </div>
  </div>
</section>
<!-- End Section -->

@endsection