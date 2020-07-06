@extends('BackEnd.Layouts.app')

@section('title', 'All order list || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'Order')
  @section('crumb-name', 'All')
  @include('FrontEnd.Layouts.breadcrumb')

         <!-- Section -->
<section class="container g-pt-40">
  <div class="row justify-content-center g-py-20 g-px-20">
            
              <!--Basic Table-->
              <div class="table-responsive col-md-12">
                <table class="table table-bordered u-table--v2">
                  <thead class="text-uppercase g-letter-spacing-1">
                    <tr>
                      
                      <th class="g-font-weight-300 g-color-black">Customer</th>
                      <th class="g-font-weight-300 g-color-black">Mobile</th>
                      <th class="g-font-weight-300 g-color-black">Email</th>
                      <th class="g-font-weight-300 g-color-black">Address</th>
                      <th class="g-font-weight-300 g-color-black">Product</th>
                      <th class="g-font-weight-300 g-color-black">Qty</th>
                      <th class="g-font-weight-300 g-color-black">Status</th>
                      <th class="g-font-weight-300 g-color-black">Price</th>
                      
                      <th class="g-font-weight-300 g-color-black">Actions</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php $count='';$total=0;?>
                    @foreach($orders as $order)
                        
                      @for($i=0; $i < count($order->orderDetails); $i++)
                        <?php $count = $order->orderDetails[$i];?>
                      @endfor
                    <tr>
                     
                      <td class="align-middle"> {{$order->full_name}} </td>
                      <td class="align-middle"> {{$order->mobile}} </td>
                      <td class="align-middle"> {{$order->email}} </td>
                      <td class="align-middle"> {{$order->address}} </td>
                      
                      <td class="align-middle"> 
                        @for($i=0; $i < count($order->orderDetails); $i++)
                            {{$order->orderDetails[$i]->product->name}} <br/>
                        @endfor

                      </td>
                      <td class="align-middle"> 
                        
                        {{$count->qty}}

                      </td>
                      <td class="align-middle"> 
                        
                        {{$order->order_status}}
                        
                      </td>
                      <td class="align-middle">
                        
                        {{number_format($count->price * $count->qty)}}

                      </td>
                      <td class="align-middle text-nowrap text-center">

        <!-- Action Button -->
        <div class="btn-group g-mr-10 g-mb-15">
          <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select
          </button>
          <div class="dropdown-menu">
        @if($order->order_status === 'Approved')

            <a class="dropdown-item" href="{{route('admin.order.invoice')}}" onclick="event.preventDefault();
              document.getElementById('invoice-form{{$order->id}}').submit();" >View Invoice 
            </a>

            <a class="dropdown-item" href="{{route('admin.order.transit')}}" onclick="event.preventDefault();
              document.getElementById('transit-form{{$order->id}}').submit();">Transit  
            </a>

            <a class="dropdown-item" href="{{route('admin.order.delivered')}}" onclick="event.preventDefault();
              document.getElementById('deliver-form{{$order->id}}').submit();"> Deliver  
            </a>

            <a class="dropdown-item" href="{{route('admin.order.returned')}}" onclick="event.preventDefault();
              document.getElementById('return-form{{$order->id}}').submit();"> Return  
            </a>

        @endif
        @if($order->order_status === 'Failed')

          <a class="dropdown-item" href="{{route('admin.order.invoice')}}" onclick="event.preventDefault();
              document.getElementById('invoice-form{{$order->id}}').submit();" >View Invoice
          </a>

          <a class="dropdown-item" href="{{route('admin.order.returned')}}" onclick="event.preventDefault();
              document.getElementById('return-form{{$order->id}}').submit();" >Return  
          </a>

        @endif
        @if($order->order_status === 'Transit')

          <a class="dropdown-item" href="{{route('admin.order.invoice')}}" onclick="event.preventDefault();
              document.getElementById('invoice-form{{$order->id}}').submit();" > View Invoice
          </a>

          <a class="dropdown-item" href="{{route('admin.order.delivered')}}" onclick="event.preventDefault();
              document.getElementById('deliver-form{{$order->id}}').submit();" > Deliver  
          </a>

          <a class="dropdown-item" href="{{route('admin.order.returned')}}" onclick="event.preventDefault();
              document.getElementById('return-form{{$order->id}}').submit();" > Return  
          </a>

        @endif
        @if($order->order_status === 'Delivered' || $order->order_status === 'Returned')

          <a class="dropdown-item" href="{{route('admin.order.invoice')}}" onclick="event.preventDefault();
              document.getElementById('invoice-form{{$order->id}}').submit();" >View Invoice 
          </a>

        @endif
          </div>
        </div>
        <!-- Action Button -->

        <form id="invoice-form{{$order->id}}" action="{{route('admin.order.invoice')}}" method="post">
                        {{ csrf_field() }}
            <input type="hidden" name="order_id" value="{{$order->id}}">
        </form>

        <form id="transit-form{{$order->id}}" action="{{route('admin.order.transit')}}" method="post">

                        {{ csrf_field() }}
            <input type="hidden" name="order_id" value="{{$order->id}}">
        </form>

        <form id="deliver-form{{$order->id}}" action="{{route('admin.order.delivered')}}" method="post">
                        {{ csrf_field() }}
            <input type="hidden" name="order_id" value="{{$order->id}}">
        </form>
        <form id="return-form{{$order->id}}" action="{{route('admin.order.returned')}}" method="post">
                        {{ csrf_field() }}
            <input type="hidden" name="order_id" value="{{$order->id}}">
       </form>

                      </td>
                    </tr>
                      
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!--End Basic Table-->

              <div class="row justify-content-center">
                <div class="col-md-3">{{$orders->links()}}</div>
              </div>
            </div>
  </div>
</section>
<!-- End Section -->

@endsection

