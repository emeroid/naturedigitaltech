@extends('FrontEnd.Layouts.app')

@section('title', 'Products Item List')

@section('top-bar')
    @include('FrontEnd.Products.layout.nav')
@endsection

@section('content')
  @section('crumb-folder', 'Products')
  @section('crumb-name', 'Products')
  @include('FrontEnd.Layouts.breadcrumb')

  	<div class="container">
  	<div class="col-md-12 order-md-4">
            <div class="g-pl-15--lg">
              <!-- Filters -->
              <div class="d-flex justify-content-end align-items-center g-brd-bottom g-brd-gray-light-v4 g-pt-20 g-pb-10">
                <!-- Sort By -->
                  <div class="mb-1">
                    <p class="h6 text-uppercase mb-3"> Category: </p>
                  </div>
                    
                    <div class="mb-4">
                      <select class="form-control form-control-sm rounded-0" name="category" id="category" >
                        <option value=""></option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                        
                      </select>
                    </div>
                
                <!-- End Sort By -->
              </div>
              <!-- End Filters -->
          </div>
      </div>
  </div>

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
                  <strong>Notice!</strong> To benefit as an affiliate and earn commisions, discounts and price, you must purchase any product of your choice worth N20,000 and above. <p>Shop now and earn.</p>
                </span>
              </div>
            </div>
      <!-- End Yellow Alert -->

          <div class="row">

              @foreach($products as $product)

              <div class="col-md-6 col-lg-3 g-mb-30">
                <!-- Article -->
                <article class="info-v5-6 g-pos-rel g-bg-gray-dark-v2 g-bg-primary--hover g-color-white g-rounded-4 g-transition-0_3">

                  <!-- Article Image -->
                  <a href="{{route('product.item', $product->slug)}}"><img class="w-100 g-height-280" src="../../assets/img/uploads/products/{{$product->productImage->img}}" alt="{{$product->name}}"> </a>
                  <!-- End Article Image -->

                  <div class="u-ribbon-v1 g-width-55 g-bg-primary g-font-weight-600 g-font-size-17 g-top-0 g-left-0 p-0">
                    <span class="d-block g-bg-white g-color-primary g-line-height-0_8 g-py-15 text-center">5%
                      <small class="g-font-size-12">save</small>
                    </span>
                  </div>

                  <!-- Article Content -->
                  <div class="g-pa-25">
                    <div class="g-mb-20">
                      <h3 class="h5 g-mb-5">{{$product->name}}</h3>
                      <div class="js-rating info-v5-6__rating g-transition-0_3 g-color-primary g-color-gray-light-v5--hover g-font-size-11 g-mb-10" data-rating="2.5" data-spacing="5"></div>

                      <p class="g-opacity-0_8">{!!substr($product->excerpt,0,20)!!}</p>
                    </div>

                    <span class="d-block g-color-gray-light-v5 g-color-black--hover g-line-height-0_8 g-py-15 text-left g-font-size-16 g-font-weight-600">&#8358;{{number_format($product->price)}} </span>

                    <a class="btn btn-block u-btn-primary g-color-primary--hover g-bg-white--hover g-font-weight-600 g-font-size-11 text-uppercase" href="{{route('product.item', $product->slug)}}">More</a>

                    <a class="btn btn-block u-btn-orange block g-color-white--hover g-bg-black--hover g-font-weight-600 g-font-size-11 text-uppercase" href="{{ route('cart.add', $product->id) }}">Add Cart</a>

                    

                  </div>
                  <!-- End Article Content -->
                </article>
                <!-- End Article -->
              </div>
              @endforeach
              
            </div>

            <div class="row d-sm-flex justify-content-center">
                <div class="col-md-4">{{$products->links()}}</div>
            </div>

               <!-- Yellow Alert -->
            <div class="alert col-md-12 alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
              <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <div class="media">
                <span class="d-flex g-mr-10 g-mt-5">
                  <i class="icon-info g-font-size-25"></i>
                </span>
                <span class="media-body align-self-center">
                  <strong>Notice!</strong> To benefit from our various commisions, discounts and promos. Register as an affiliate. <p>Start earning Big Now.</p>
                </span>
              </div>
            </div>
      <!-- End Yellow Alert -->
           </section>      
       	  
@endsection

@section('js')
<script>
  
  function selectVal(){
      return document.getElementById('category').value;
  }
</script>
 

@endsection