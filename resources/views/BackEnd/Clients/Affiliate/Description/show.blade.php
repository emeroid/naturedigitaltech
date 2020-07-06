@extends('BackEnd.Layouts.app')

@section('title', 'Affiliate Description || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'affiliate')
  @section('crumb-name', 'Affiliate description')
  @include('FrontEnd.Layouts.breadcrumb')

     <!-- Section -->
<section class="container g-pt-50 g-pb-50">
  <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">
            
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

                      <td class="align-middle"> {{$desc->title}} </td>
                        <td class="align-middle"> 
                          <div class="media">
                          <img class="d-flex g-width-40 g-height-40 rounded-circle g-mr-10" src="/assets/img/Uploads/Affiliate/desc/{{$desc->img}}" alt="{{$desc->title}}">    
                        </td>
                        <td class="align-middle"> {!!substr($desc->body, 0, 40)!!}.... </td>
                      
                      <td class="align-middle text-nowrap text-center">
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover g-pa-5" href="{{route('admin.client.affiliate.desc.edit', $desc->id)}}" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                          <i class="icon-pencil g-font-size-18 g-mr-7"></i>
                        </a>
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
              <!--End Basic Table-->
            </div>
  </div>
</section>
<!-- End Section -->

@endsection