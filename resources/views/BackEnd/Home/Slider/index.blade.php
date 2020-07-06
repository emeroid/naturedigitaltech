@extends('BackEnd.Layouts.app')

@section('title', 'All Slider Content || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Slider Content')
  @section('crumb-name', 'Home')
  @include('FrontEnd.Layouts.breadcrumb')

         <!-- Section -->
<section class="container g-pt-50 g-pb-50">
  <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">
            <div class="row">
              <a class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" href="{{route('admin.setting.slider.create')}}">Create New</a>
            </div>
              <!--Basic Table-->
              <div class="table-responsive col-md-12">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      <th class="g-font-weight-300 g-color-black">No.</th>
                      <th class="g-font-weight-300 g-color-black">Category</th>
                      
                      <th class="g-font-weight-300 g-color-black">Content</th>
                      <th class="g-font-weight-300 g-color-black">Background Image</th>
                      <th class="g-font-weight-300 g-color-black">Content Image</th>
                      
                      <th class="g-font-weight-300 g-color-black">Actions</th>
                    </tr>
                  </thead>

                  <tbody>
                    @php $count = 0; @endphp
                    @foreach($slides as $slide)
                      @php $count++; @endphp
                    <tr>

                      <td class="align-middle"> {{$count}} </td>
                      <td class="align-middle"> {{$slide->category}} </td>
                       
                      <td class="align-middle"> {{substr($slide->body, 0, 70)}} </td>

                      <td class="align-middle"> {{$slide->bg_img}} </td>
                      <td class="align-middle"> {{$slide->body_img}} </td>
                      
                      <td class="align-middle text-nowrap text-center">
                        
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover g-pa-5" href="{{route('admin.setting.slider.edit', $slide->id)}}" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                          <i class="icon-pencil g-font-size-18 g-mr-7"></i>
                        </a>

                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover g-pa-5" href="{{route('admin.setting.slider.delete', $slide->id)}}" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
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
                <div class="col-md-3">{{$slides->links()}}</div>
              </div>
            </div>
  </div>
</section>
<!-- End Section -->

@endsection