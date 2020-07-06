@extends('FrontEnd.Layouts.app')

@section('title', 'FAQ || Nature Digital Tech - Making life easy')

@section('content')

  @section('crumb-folder', 'About')
  @section('crumb-name', 'FAQ')
  @include('FrontEnd.Layouts.breadcrumb')

    <!-- Promo Block -->
    <section class="container text-center g-pt-90 g-pb-30">
      <h2 class="g-color-black g-font-weight-400 g-font-size-50 g-mb-70">Frequently Asked Questions</h2>
    </section>
    <!-- End Promo Block -->

    <!-- Accordion -->
    <section class="container g-pb-100">
      <!-- Accordion -->
      <div id="purchase" class="u-shadow-v11 rounded g-py-50 g-mb-100">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div id="accordion" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
              @foreach($faq as $qa)
              <!-- Card -->
              <div class="card g-brd-none rounded-0 g-mb-20">
                <div id="accordion-heading-{{$qa->id}}" class="g-brd-bottom g-brd-gray-light-v4 g-pa-0" role="tab">
                  <h5 class="mb-0">
                      <a class="collapsed d-flex justify-content-between g-color-main g-text-underline--none--hover rounded-0 g-px-30 g-py-20" href="#accordion-body-{{$qa->id}}" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="accordion-body-{{$qa->id}}">
                        {{$qa->q}}
                        <span class="u-accordion__control-icon">
                          <i class="fa fa-angle-down"></i>
                          <i class="fa fa-angle-up"></i>
                        </span>
                      </a>
                    </h5>
                </div>
                <div id="accordion-body-{{$qa->id}}" class="collapse" role="tabpanel" aria-labelledby="accordion-heading-{{$qa->id}}" data-parent="#accordion">
                  <div class="u-accordion__body g-color-gray-dark-v4 g-pa-30">
                    {!!$qa->a!!}

                  </div>
                </div>
              </div>
              <!-- End Card -->
              @endforeach
             
            </div>
          </div>
        </div>
      </div>
      <!-- End Accordion -->

    </section>
    <!-- End Accordion -->

@endsection