@extends('BackEnd.Layouts.app')

@section('title', 'Skill Request || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Client')
  @section('crumb-name', 'Request')
  @include('FrontEnd.Layouts.breadcrumb')

         <!-- Section -->
<section class="container g-pt-50 g-pb-50">
  <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 ustify-content-center g-py-15 g-px-15">
            
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
                      <th class="g-font-weight-300 g-color-black">Message</th>
                      
                     
                    </tr>
                  </thead>

                  <tbody>
                    @php $count = 0; @endphp
                    @foreach($skills as $req)
                    @php $count++; @endphp
                    <tr>

                      <td class="align-middle"> {{$count}} </td>
                      <td class="align-middle"> {{$req->full_name}} </td>
                      <td class="align-middle"> {{$req->mobile}} </td>
                      <td class="align-middle"> {{$req->email}} </td>
                      <td class="align-middle"> {{$req->state}} </td>
                      <td class="align-middle"> {{$req->skill}} </td>
                      <td class="align-middle"> {{$req->msg}} </td>
                      
                      

                    </tr>
                    @endforeach


                  </tbody>
                </table>
              </div>
              <!--End Basic Table-->
              <div class="row justify-content-center">
                <div class="col-md-3">{{$skills->links()}}</div>
              </div>
            </div>
  </div>
</section>
<!-- End Section -->

@endsection