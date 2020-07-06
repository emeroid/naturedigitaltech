@extends('FrontEnd.Layouts.app')

@section('title', 'Product Item')

@section('css')
  <!-- CSS Implementing Plugins -->
  <link  rel="stylesheet" href="../../assets/vendor/fancybox/jquery.fancybox.min.css">
@endsection

@section('top-bar')
    @include('FrontEnd.Products.layout.nav')
@endsection

@section('content')
  @section('crumb-folder', 'Products')
  @section('crumb-name', 'Products')
  @include('FrontEnd.Layouts.breadcrumb')

  		    <section class="container g-pt-100 g-pb-40">
            <div class="row justify-content-center">
                <!-- Start fancy image -->
                  <div class="col-md-6 g-mb-30">
                    <div class="row">
                    @foreach($product->productImages as $proimg)
                      <div class="col-md-6 g-mb-30">
                        <a class="js-fancybox" href="javascript:;" data-fancybox="lightbox-gallery--col2" data-src="../../assets/img/uploads/products/{{$proimg->img}}" data-caption="Lightbox Gallery">
                          <img class="img-fluid" src="../../assets/img/uploads/products/{{$proimg->img}}" alt="{{$product->name}}">
                        </a>
                      </div>
                    @endforeach
                    </div>
                  </div>

                   <!-- End fancy image -->

                     <!--Product content starts -->
        <div class="col-lg-6 g-mb-60">
          <div class="mb-4">
            <h2 class="h3 text-uppercase mb-3">{{$product->name}}</h2>
            <div class="g-width-60 g-height-1 g-bg-black"></div>
          </div>
         
            
            <h4 class="h5 text-uppercase mb-3">Price: <span class="g-color-red">&#8358;{{number_format($product->price)}}</span></h4>
            <div class="g-width-60 g-height-1 g-bg-primary"></div>
          
          <div class="mb-5">
            <p>{!!$product->excerpt!!}</p>

            <h4 class="h5 text-uppercase mb-3">More Details</h4>
            <p>{!!$product->body!!}</p>
          </div>
          
          <a class="btn btn-xl u-btn-primary g-font-size-default" href="{{ route('cart.add', $product->id) }}">Buy Now</a>

          @if(count(\Cart::getContent()) !== 0)
          <a class="btn btn-xl u-btn-orange g-font-size-default" href="{{route('product.checkout')}}"> Checkout</a>
          @endif

        </div>

       

        <!--Product content ends --> 

        </div>
      </div>
    </div>
  </section>      
       	  
@endsection

@section('js')

<!-- JS Implementing Plugins -->
  <script  src="../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script  src="../../assets/js/components/hs.popup.js"></script>

@endsection
