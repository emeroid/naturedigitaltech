
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>@yield('title')</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="{{asset('assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/icon-line/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/icon-etlinefont/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/icon-line-pro/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/icon-hs/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/animate.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/hamburgers/hamburgers.min.css')}}">

  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/unify-core.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/unify-components.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/unify-globals.css')}}">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">

  @yield('css')
</head>

<body>
  <main>
  <!-- Header Starts -->

  @include('BackEnd.Layouts.header')

  

  <!-- Header Ends -->


    <!-- Section Starts -->

      @yield('content')

    <!-- Section Ends -->

    <!-- Footer Starts-->

        @include('BackEnd.Layouts.footer')

    <!-- Footer Ends -->

    <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('assets/vendor/popper.js/popper.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>


  <!-- JS Implementing Plugins -->
  <script src="{{asset('assets/vendor/appear.js')}}"></script>
  <script src="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>

  

  <!-- JS Unify -->
  <script src="{{asset('assets/js/hs.core.js')}}"></script>
  <script src="{{asset('assets/js/components/hs.header.js')}}"></script>
  <script src="{{asset('assets/js/helpers/hs.hamburgers.js')}}"></script>
  <script src="{{asset('assets/js/components/hs.tabs.js')}}"></script>
  <script src="{{asset('assets/js/components/hs.onscroll-animation.js')}}"></script>
  <script src="{{asset('assets/js/components/hs.go-to.js')}}"></script>

  <!-- JS Customization -->
  <script src="{{asset('assets/js/custom.js')}}"></script>

  @yield('js')

  <script src="{{asset('assets/js/toastr.min.js')}}"></script>
    <script type="text/javascript">
        toastr.options.progressBar = true;
        toastr.options.escapeHtml = false;
        toastr.options.extendedTimeOut = 6000;
        toastr.options.hideEasing = 'swing';
        toastr.options.showMethod = 'slideDown';
        toastr.options.closeButton = true;
    </script>
    @if(session("success"))
        <script type="text/javascript">
         toastr.success("{!! session("success") !!}",'Success');
        </script>

    @elseif(session("warning"))
        <script type="text/javascript">
          toastr.warning("{!! session("warning") !!}",'Warning!',{timeOut:50000});
        </script>

    @elseif(session("info"))
        <script type="text/javascript">
         toastr.info("{{ session("info") }}",'Info');
        </script>
  
    @elseif(session("error"))
        <script type="text/javascript">
         toastr.error("{{ session("error") }}"'Error',{timeOut:50000});
        </script>
    @endif

  <!-- JS Plugins Init. -->
  <script>
    

      $(document).on('ready', function () {
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of scroll animation
        $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>







</body>

</html>
