@extends('FrontEnd.Layouts.app')

@section('title', 'Home | | Nature Digital Tech - Making life easy')

@section('css')

  <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/settings.css">
  <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/layers.css">
  <link rel="stylesheet" href="../../assets/vendor/revolution-slider/revolution/css/navigation.css">

@endsection

@section('content')
  
  @include('FrontEnd.Layouts.slider')

         <!-- Section 1 -->
  @foreach($content as $cont)
    <section class="g-py-100 g-bg-{{$cont->bg}} {{$cont->bg == 'white' ? 'g-color-black' : 'g-color-white'}}">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center g-mb-50--md g-mb-0--md">
            <div class="u-heading-v2-3--bottom g-brd-primary g-mb-30">
              <h2 class="h1 u-heading-v2__title g-color-gray-dark-v2 text-uppercase g-font-weight-700">{{$cont->title}}</h2>
            </div>

            <div class="g-font-size-18 g-line-height-2 g-mb-30">
             {!! $cont->body !!}
            </div>

            <a href="{{$cont->link}}" class="btn u-btn-primary u-shadow-v21 g-font-size-12 text-uppercase g-font-weight-600 g-rounded-50 g-py-15 g-px-25 g-mr-15 g-mb-10 g-mb-0--sm">
              Learn More
            </a>
            
          </div>

          <div class="col-md-6 align-self-center text-center g-overflow-hidden">
            <img class="img-fluid w-75" src="/assets/img/uploads/home/{{$cont->img}}" alt="Nature green Tech" data-animation="fadeInUp" data-animation-delay="0" data-animation-duration="1000">
          </div>
        </div>
      </div>
    </section>
  @endforeach
    <!-- End Section 1 -->

    @endsection

    @section('js')

    <!-- JS Revolution Slider -->
  <script src="../../assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

  <script src="../../assets/vendor/revolution-slider/revolution-addons/slicey/js/revolution.addon.slicey.min.js"></script>

  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="../../assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script >
  // initialization of slider revolution
      var tpj = jQuery,
        revapi26;

      tpj(document).ready(function () {
        if (tpj("#rev_slider_26_1").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev_slider_26_1");
        } else {
          revapi26 = tpj("#rev_slider_26_1").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
              keyboardNavigation: "off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "off",
              mouseScrollReverse: "default",
              onHoverStop: "off",
              touch: {
                touchenabled: "on",
                touchOnDesktop: "off",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              },
              arrows: {
                style: "uranus",
                enable: true,
                hide_onmobile: true,
                hide_under: 778,
                hide_onleave: false,
                tmp: '',
                left: {
                  h_align: "left",
                  v_align: "center",
                  h_offset: 15,
                  v_offset: 0
                },
                right: {
                  h_align: "right",
                  v_align: "center",
                  h_offset: 15,
                  v_offset: 0
                }
              },
              bullets: {
                enable: true,
                hide_onmobile: false,
                style: "bullet-bar",
                hide_onleave: false,
                direction: "horizontal",
                h_align: "center",
                v_align: "bottom",
                h_offset: 0,
                v_offset: 30,
                space: 5,
                tmp: ''
              }
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [868, 768, 960, 720],
            lazyType: "none",
            parallax: {
              type: "scroll",
              origo: "slidercenter",
              speed: 2000,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55]
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "60px",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false
            }
          });
        }
      });
      </script>

    @endsection