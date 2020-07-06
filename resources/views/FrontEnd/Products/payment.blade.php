@extends('FrontEnd.Layouts.app')

@section('title', 'Checkout Payment')

@section('top-bar')
    @include('FrontEnd.Products.layout.nav')
@endsection

@section('content')


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

<!-- Hero Info #05 -->
<section class="g-py-200--md g-py-80">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-10 ml-md-auto mr-md-auto">
        <h3 class="h5 text-uppercase g-font-weight-700 g-mb-20">Purchase now and</h3>
        <h2 class="display-4 text-uppercase g-font-weight-600 g-mb-20">
          <span class="g-color-primary">Get 15%</span>
          discount
        </h2>

        <p class="lead g-mb-40">Use the bellow secured payment gateway to complete your online transaction.</p>

         <input type='image' src="https://voguepay.com/images/buttons/make_payment_red.png" id="pay" onclick="pay3()" alt='Pay online' />

      </div>
    </div>
  </div>
</section>
<!-- Hero Info #05 -->
@endif

@endsection

@section('js')

<script src="//voguepay.com/js/voguepay.js"></script>

  <script>

     successFunction=function(transaction_id) {
          document.body.innerHTML += '<form id="success_form" method="POST" action="{{route('product.checkout.success')}}" > {{ csrf_field() }}<input type="hidden" name="transactionId" value="" id="transactionId"></input>';
          document.getElementById("transactionId").value = transaction_id;
          document.getElementById("success_form").submit();
     
    }

     failedFunction=function(transaction_id) {
          document.body.innerHTML += '<form id="fail_form" method="POST" action="{{route('product.checkout.fail')}}">{{ csrf_field() }}<input type="hidden" id="transactionId" name="transactionId" value="" />';
          document.getElementById("transactionId").value = transaction_id;
          document.getElementById("fail_form").submit();
    }

</script>

 <script>
  
    $('#pay').click(function(){
      $.ajax({
        type:"GET",
        url:"/session/check",
        success:function(results){

          if(results == 'success'){
            window.location.href="{{route('product.items')}}"
          }
          else{
            
          }
        }
      }); 
    });
   

     function pay3() {
         Voguepay.init({
             v_merchant_id: 'demo',
             total: "{{count($cartCollection)}}",
             notify_url: 'http://domain.com/notification.php',
             cur: 'NGN',
             merchant_ref: 'ref123',
             memo: 'Order from Nature Green Tech',
             developer_code: '5e124f4742fe4',
             store_id: 9679,
             loadText:'Custom load text',
             items: [
    
             @foreach($cartCollection as $cart)
                 {
                     name: "{{$cart->name}}",
                     description: "{{$cart->name}}",
                     price: "{{$cart->price * $cart->quantity}}"
                 },
             @endforeach
                 
             ],
             customer: {
                name: "{{request()->full_name}}",
                address: "{{session()->get('address')}}",
                state: "{{session()->get('state')}}",
                email: "{{request()->email}}",
                phone: "{{session()->get('mobile')}}"
            },
             success:successFunction,
             failed:failedFunction
         });
     }
     
  </script>

  @stop