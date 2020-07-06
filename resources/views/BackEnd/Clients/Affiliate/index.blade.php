@extends('BackEnd.Layouts.app')

@section('title', 'Affiliate || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Client')
  @section('crumb-name', 'Affilate')
  @include('FrontEnd.Layouts.breadcrumb')

         <!-- Section -->
<section class="container g-pt-50 g-pb-50">
  <div class="row u-shadow-v1-5 g-line-height-2 g-pt-50 g-pb-10 justify-content-center g-py-15 g-px-15">

    <div class="container g-py-15 g-px-15">
    <div class="row g-pt-10 g-pb-10">
    <div class="col-md-2">
      
    </div>

    <div class="col-md-3">
      <a class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" href="{{route('admin.client.affiliate.desc.show')}}">Description</a>
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
                      <th class="g-font-weight-300 g-color-black">Address</th>
                      <th class="g-font-weight-300 g-color-black">Image</th>
                      <th class="g-font-weight-300 g-color-black">Purchase</th>
                      
                      <th class="g-font-weight-300 g-color-black">Status</th>
                    </tr>
                  </thead>

                  <tbody>
                    @php $count = 0; @endphp
                    @foreach($affiliate as $aff)
                      @php $count++; @endphp
                    <tr>

                      <td class="align-middle"> {{$count}} </td>
                      <td class="align-middle"> {{$aff->user->name}} </td>
                       
                      <td class="align-middle"> {{$aff->mobile}} </td>
                      <td class="align-middle"> {{$aff->user->email}} </td>
                      <td class="align-middle"> {{$aff->address}} </td>
                      <td class="align-middle"> <img class="d-flex g-width-80 g-height-80 rounded-circle g-mr-10" src="/assets/img/uploads/Affiliate/Profile/{{$aff->id}}/{{$aff->img}}" /> </td>
                      <td class="align-middle"> {{count($aff->user->order)}} </td>
                      
                      <td class="align-middle text-nowrap text-center">
                        Active
                      </td>

                    </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-3">{{$affiliate->links()}}</div>
              </div>
              <!--End Basic Table-->
            </div>
  </div>
</section>
<!-- End Section -->

@endsection