@extends('BackEnd.Layouts.app')

@section('title', 'Skilled Workers || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Client')
  @section('crumb-name', 'Workers')
  @include('FrontEnd.Layouts.breadcrumb')

         <!-- Section -->
<section class="container g-pt-50 g-pb-50">
  <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">

<div class="container g-py-15 g-px-15">
  <div class="row g-pt-10 g-pb-10">
    <div class="col-md-2">
      
    </div>

    <div class="col-md-3">
      <a class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" href="{{route('admin.client.worker.skill.all')}}">View Skill</a>
    </div>
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
                      
                    </tr>
                  </thead>

                  <tbody>
                    @php  $count = 0; @endphp
                    @foreach($jobreg as $skill)
                    @php  $count++; @endphp
                    <tr>

                      <td class="align-middle"> {{$count}} </td>
                      <td class="align-middle"> {{$skill->full_name}} </td>
                      <td class="align-middle"> {{$skill->mobile}} </td>
                      <td class="align-middle"> {{$skill->email}} </td>
                      <td class="align-middle"> {{$skill->state->name}} </td>
                      <td class="align-middle"> {!!(!is_null($skill->skill)) ? $skill->skill->title: '<span class="g-color-red">Deleted Skill</span>'!!} </td>
                      
                    </tr>
                    @endforeach


                  </tbody>
                </table>
              </div>
              <!--End Basic Table-->

              <div class="row justify-content-center">
                <div class="col-md-3">{{$jobreg->links()}}</div>
              </div>
            </div>
  </div>
</section>
<!-- End Section -->

@endsection