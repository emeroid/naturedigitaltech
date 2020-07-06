@extends('BackEnd.Layouts.app')

@section('title', 'Job Description || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Page')
  @section('crumb-name', 'Job')
  @include('FrontEnd.Layouts.breadcrumb')

     <!-- Section -->
<section class="container g-pt-50 g-pb-50">
  <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">

    @if(is_null($job))
      {{'No item in Table'}}
    @else   
              <!--Basic Table-->
              <div class="table-responsive col-md-12">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      <th class="g-font-weight-300 g-color-black">Title</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-200">Image</th>
                      <th class="g-font-weight-300 g-color-black">Body</th>
                      
                      <th class="g-font-weight-300 g-color-black">Actions</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>

                      <td class="align-middle"> {{$job->title}} </td>
                        <td class="align-middle"> 
                          <div class="media">
                          <img class="d-flex g-width-40 g-height-40 rounded-circle g-mr-10" src="../../assets/img/Uploads/Job/{{$job->img}}" alt="{{$job->title}}">    
                        </td>
                        <td class="align-middle"> {!!substr($job->body, 0, 40)!!}.... </td>
                      
                      <td class="align-middle text-nowrap text-center">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover g-pa-5" href="{{route('admin.page.job.edit', $job->id)}}" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                          <i class="icon-pencil g-font-size-18 g-mr-7"></i>
                        </a>
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
              <!--End Basic Table-->
            </div>
            @endif
  </div>
</section>
<!-- End Section -->

@endsection