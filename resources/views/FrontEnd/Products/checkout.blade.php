
@extends('FrontEnd.Layouts.app')

@section('title', 'Checkout')

@section('top-bar')
    @include('FrontEnd.Products.layout.nav')
@endsection

@section('content')
  @section('crumb-folder', 'Checkout')
  @section('crumb-name', 'Checkout')
  @include('FrontEnd.Layouts.breadcrumb')

  @if(count($cartCollection) == 0)

  <section class="container g-pt-20 g-pb-40">

        <!-- Yellow Alert -->
            <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
              <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <div class="media">
                <span class="d-flex g-mr-10 g-mt-5">
                  <i class="icon-info g-font-size-25"></i>
                </span>
                <span class="media-body align-self-center">
                  <strong>Notice!</strong> Your Cart is Empty. 

                </span>
              </div>
            </div>

            <a class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" href="/product/items">Continue Shopping</a>
      <!-- End Yellow Alert -->
    </section>
  @else
  <section class="container g-pt-100 g-pb-40">
    <div class="row justify-content-center">

      <div class="col-lg-6 g-mb-60">
        <div class="mb-4">
            <h2 class="h3 text-uppercase mb-3">Enter Shipping Information</h2>
            <div class="g-width-60 g-height-1 g-bg-black"></div>
          </div>
          <form action="{{route('product.checkout.save')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                @php $user = auth()->user(); @endphp
            <div class="row">
              <div class="col-md-12 form-group g-mb-10">
                <label class="g-color-gray-dark-v2 g-font-size-13">Full Name</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="Full name" name="full_name" @if(auth()->check())value="{{$user->name}}" readonly="true" @else value="{{old('full_name')}}" @endif>
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('full_name'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('full_name') }}</strong>
                    </span>
                @endif
              </small>

            </div>

             <div class="row">
              <div class="col-md-12 form-group g-mb-10">
                <label class="g-color-gray-dark-v2 g-font-size-13">Mobile</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="number" placeholder="mobile mobile" name="mobile" @if(auth()->check())value="{{$user->affiliate->mobile}}" @else value="{{old('mobile')}}" @endif >
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('mobile'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('mobile') }}</strong>
                    </span>
                @endif
              </small>

            </div>

             <div class="row">
              <div class="col-md-12 form-group g-mb-10">
                <label class="g-color-gray-dark-v2 g-font-size-13">Email</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="email" placeholder="email" name="email" @if(auth()->check()) value="{{$user->email}}" readonly="true" @else value="{{old('email')}}" @endif >
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('email'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </small>

            </div>

             <div class="row">
              <div class="col-md-12 form-group g-mb-10">
                <label class="g-color-gray-dark-v2 g-font-size-13">Address</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="address address" name="address" @if(auth()->check())value="{{$user->affiliate->address}}" @else value="{{old('address')}}" @endif />
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('address'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('address') }}</strong>
                    </span>
                @endif
              </small>

            </div>
             <div class="row">
              <div class="col-md-12 form-group g-mb-10">
                <label class="g-color-gray-dark-v2 g-font-size-13">State</label>
                <select class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="state state" name="state" >
                  <option value=""></option>
                  @foreach($states as $state)
                  <option value="{{$state->id}}">{{$state->name}}</option>
                  @endforeach

                </select>
              </div>

              <small class="form-control-feedback"> 
                @if ($errors->has('state'))
                    <span class="help-block">
                      <strong class="text-danger">{{ $errors->first('state') }}</strong>
                    </span>
                @endif
              </small>

            </div>

          <div class="text-right">
            <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" type="submit" role="button">Procceed to payment
            </button>
          </div>
      </form>
    </div>

    <div class="col-lg-6 g-mb-60">

          <div class="mb-4">
            <h2 class="h3 text-uppercase mb-3">Order Summary</h2>
            <div class="g-width-60 g-height-1 g-bg-black"></div>
          </div>

              <!--Basic Table-->
              <div class="table-responsive col-md-12">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      <th class="g-font-weight-300 g-color-black">Title</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-100">Image</th>
                      <th class="g-font-weight-300 g-color-black g-min-width-100">Qty</th>
                      
                      <th class="g-font-weight-300 g-color-black">Price</th>
                       <th class="g-font-weight-300 g-color-black">Action</th>
                    </tr>
                  </thead>

                  <tbody>

                    @foreach($cartCollection as $col)
                    <tr>

                      <td class="align-middle"> {{$col->name}} </td>
                        <td class="align-middle"> 
                          <div class="media">
                          <img class="d-flex g-width-40 g-height-40 rounded-circle g-mr-10" src="../../assets/img/Uploads/products/{{$col->attributes->image}}" alt="{{$col->name}}">    
                        </td>
                        <td class="align-middle"> 

                          <form action="{{route('cart.update')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                          <select class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" name="qty" onchange="this.form.submit();" >
                              <option selected="" value="{{$col->quantity}}">{{$col->quantity}}</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>

                          </select>
                        <input type="hidden" value="{{$col->id}}" name="id">
                      </form>

                        </td>
                        <td class="align-middle">&#8358; {{number_format($col->price * $col->quantity)}} </td>
                      
                      <td class="align-middle text-nowrap text-center">
                       
                        <a class="g-color-gray-dark-v5 g-text-underline--none--hover g-pa-5" href="{{route('cart.remove', $col->id)}}" data-toggle="tooltip" data-placement="top" data-original-title="Remove">
                          <i class="icon-trash g-font-size-18 g-mr-7"></i>
                        </a>
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
@endif

  @endsection

