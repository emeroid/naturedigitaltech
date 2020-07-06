@extends('BackEnd.Layouts.app')

@section('title', 'Order Invoice || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Order')
  @section('crumb-name', 'Order Invoice')
  @include('BackEnd.Layouts.breadcrumb')

<!-- General Info -->
    <section class="container g-pt-100 g-pb-30">
      <div class="row">
        <div class="col-md-3 g-mb-30">
          <img src="{{asset('assets/img/logo/edeh-logo.png')}}" alt="Nature Digital Technology">
        </div>

        <div class="col-md-5 g-mb-30">
          <h3 class="h5 g-color-black g-font-weight-600 text-uppercase">Client Info:</h3>
          <ul class="list-unstyled g-font-size-default">
            <li><span class="g-font-weight-700">Full name:</span> {{$order->full_name}}</li>
            <li><span class="g-font-weight-700">Address:</span> {{$order->address}}</li>
            <li><span class="g-font-weight-700">Delivery State:</span> {{$order->state}}</li>
            <li><span class="g-font-weight-700">Mobile:</span> {{$order->mobile}}</li>
            <li><span class="g-font-weight-700">Email:</span> {{$order->email}}</li>
            <li><span class="g-font-weight-700">Date:</span> {{$order->created_at}}</li>
            
          </ul>
        </div>

        <div class="col-md-3 g-mb-30">
          <h3 class="h5 g-color-black g-font-weight-600 text-uppercase">Payment Details:</h3>
          <ul class="list-unstyled g-font-size-default">
            <li><span class="g-font-weight-700">Transaction ID:</span> {{$response->transaction_id}}</li>
            <li><span class="g-font-weight-700">Payment Status:</span> {{$response->status}}</li>
            <li><span class="g-font-weight-700">Total Amount:</span> {{$response->total_paid_by_buyer}}</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- End General Info -->

    <!-- Invoice Info -->
    <section class="container g-mb-40">
      <div class="row justify-content-end no-gutters">
        <div class="col-sm-4 col-md-3 col-lg-2 mb-1">
          <div class="g-bg-gray-light-v5 text-center g-pa-15">
            <h3 class="h6 g-color-black g-font-weight-600 text-uppercase"># Invoice No</h3>
            <p class="g-font-size-13 mb-0">{{$response->transaction_id}}</p>
          </div>
        </div>

        <div class="col-sm-4 col-md-3 col-lg-2 mb-1">
          <div class="g-bg-gray-light-v5 text-center g-pa-15">
            <h3 class="h6 g-color-black g-font-weight-600 text-uppercase"># Invoice Date</h3>
            <p class="g-font-size-13 mb-0">{{$order->created_at}}</p>
          </div>
        </div>
        
      </div>
    </section>
    <!-- End Invoice Info -->

    <!-- Table Striped Rows -->
    <section class="container g-pb-70">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead class="g-color-white g-bg-primary text-center text-uppercase">
            <tr>
              <th class="g-brd-top-none g-font-weight-500 g-py-15">Ref</th>
              <th class="g-brd-top-none g-font-weight-500 text-left g-py-15">Product Name</th>
              <th class="g-brd-top-none g-font-weight-500 g-py-15">Quantity</th>
              <th class="g-brd-top-none g-font-weight-500 g-py-15">Unit price</th>
              <th class="g-brd-top-none g-font-weight-500 g-py-15">Total</th>
            </tr>
          </thead>

          <tbody class="text-center">

        <?php $count=0;$total=0;?>
          @for($i=0; $i < count($order->orderDetails); $i++)
            <?php $count++;?>
            <tr>
              <td class="g-width-70 g-color-gray-dark-v4 g-font-weight-600 g-py-15">{{$count}}</td>
              <td class="g-max-width-300 text-left g-py-15">
                <h4 class="g-color-gray-dark-v4 g-font-weight-700 g-font-size-16">{{$order->orderDetails[$i]->product->name}}</h4>
                
              </td>
              <td class="g-color-gray-dark-v4 g-font-weight-600 g-py-15">{{$order->orderDetails[$i]->qty}}</td>
              <td class="g-color-gray-dark-v4 g-font-weight-600 g-py-15">{{$order->orderDetails[$i]->price}}</td>
              <?php $total +=$order->orderDetails[$i]->price * $order->orderDetails[$i]->qty; ?>
              <td class="g-color-gray-dark-v4 g-font-weight-600 g-py-15">{{$total}}</td>

            </tr>
            @endfor
          </tbody>
        </table>
      </div>
      
   <!-- Total -->
      <div class="row justify-content-between">
        <div class="col-md-4 align-self-center g-hidden-sm-down g-mb-30">
          
        </div>

        <div class="col-md-7 col-lg-4 align-self-center g-mb-30">
          <div class="g-bg-gray-light-v5 g-color-black g-font-weight-600 text-right text-uppercase py-4 g-pr-50 mb-3">
            <h4 class="d-inline-block h6 text-left g-font-weight-600 g-min-width-110 mb-0 g-color-red">Grand Total</h4>
            <span class="text-left mx-5">:</span>
            <span class="d-inline-block g-min-width-65 g-color-red"> &#8358;{{number_format($total)}}</span>
          </div>
          <div class="text-right">
            <button class="btn btn-md u-btn-darkgray g-font-size-default rounded-0 g-py-10 mr-2" type="button" onclick="javascript:window.print();">
              <i class="g-pos-rel g-top-1 mr-2 icon-education-082 u-line-icon-pro"></i>
              Print
            </button>
          </div>
        </div>
      </div>
      <!-- End Total -->
    </section>
    <!-- End Table Striped Rows -->

    @endsection