  <!-- Header -->
    <header id="js-header" class="u-header u-header--static">
     
      <div class="u-header__section u-header__section--light g-bg-primary g-transition-0_3 g-py-10 g-px-0">
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-minus-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->
            <a href="/" class="navbar-brand d-flex">
              <img src="../../../assets/img/logo/edeh-logo.png" alt="Nature Digital Technology">
            </a>
            <!-- End Logo -->

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto ">
                <!-- Home -->
                <li class="nav-item g-mx-10--lg g-mx-15--xl">
                  <a href="/" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0">Home</a>
                </li>
                <!-- End Home -->

                <!-- Services -->
                <li class="hs-has-sub-menu nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages">Services</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-pages" aria-labelledby="nav-link-pages">
                    
                    <!-- Services - Request -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="/services/skill/request" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Request for a technician</a>
                    </li>
                    <!-- End Services - Request -->
                  </ul>
                </li>
                 
                <!-- End Services -->

                  <li class="hs-has-sub-menu nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages">Training</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-pages" aria-labelledby="nav-link-pages">
                    <!-- Services - Register -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="/training/description" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Course Description</a>

                    </li>

                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="/training/schedule" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Schedule</a>

                    </li>

                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="/training/register" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Register</a>

                    </li>
                    <!-- End Services - Training -->
                    
                  </ul>
                </li>

                <!-- Products -->
                
                <li class="nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link--blog" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="/product/items" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--blog">Products</a>
                </li>

                <!-- End Products -->


                <li class="hs-has-sub-menu nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages">Affiliate</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-pages" aria-labelledby="nav-link-pages">
                    <!-- Services - About Affiliate -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="/affiliate/about" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">About Affiliate</a>

                    </li>
                    @if (Route::has('register'))
                      @auth

                      <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="/affiliate/home" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Home</a>

                    </li>

                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link"  aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </li>
                      @else
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="/affiliate/register" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Register/Login</a>

                    </li>
                    @endauth
                    @endif
                    <!-- End Services - Training -->
                    
                  </ul>
                </li>


                 <li class="hs-has-sub-menu nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages">Jobs</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-pages" aria-labelledby="nav-link-pages">
                    <!-- Services - Register -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="/job/register" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Register</a>

                    </li>

                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="/job/all" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">See All available jobs</a>

                    </li>
                    <!-- End Services - Training -->
                    
                  </ul>
                </li>

                <!-- Start Greeleaf -->
                <!-- <li class="hs-has-sub-menu nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages">Greenleaf</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-pages" aria-labelledby="nav-link-pages"> -->

                     <!-- Service - center -->
                    <!-- <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="/greenleaf/service-center" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Service Center</a>
                    </li> -->

                    <!-- greenleaf - benefit -->
                    <!-- <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="/greenleaf/benefits" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Benfits</a>

                    </li> -->

                    <!-- coonect - whatsapp -->
                    <!-- <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="https://api.whatsapp.com/send?phone=2348175842817&text=Hello%21%20I%20am%20interested%20in%20one%20of%20your%20Greenleaf%20product..&source=&data="aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Connect to WhatsApp</a>
                    </li> -->
                    
                  <!-- </ul>
                </li> -->
                <!-- End Greeleaf -->

                <!-- Start Blog -->
                <li class="nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link--blog" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--blog">Blog</a>
                </li>
                <!-- End Blog -->

                <!-- About -->
                <li class="nav-item hs-has-sub-menu  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link--blog" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--blog">About</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu--blog" aria-labelledby="nav-link--blog">
                    <!-- About - Company -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--blog--single-item" class="nav-link" href="/about/company" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--blog--single-item">Company</a>
                      
                    </li>
                    <!-- End About - Company -->

                    <!-- About - Our Services -->
                    <!-- <li class="dropdown-item ">
                      <a id="nav-link--pages--blog--minimal" class="nav-link" href="/about/services" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--blog--minimal">Our Services</a>
                    </li> -->
                    <!-- End About - Our Services -->

                    <!-- About - Contact Us -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--blog--grid-bg" class="nav-link" href="/about/contact" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--blog--grid-bg">Contact Us</a>
                      
                    </li>
                    <!-- End About - Contact Us -->

                    <!-- Blog - FAQ -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--blog--grid-classic" class="nav-link" href="/about/faq" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--blog--grid-classic">FAQ</a>

                    </li>
                    <!-- End About - FAQ -->


                    <!-- About - Partnership -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--blog--grid-overlap" class="nav-link" href="/about/partnership" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--blog--grid-overlap">Job</a>
                      
                    </li>
                    <!-- End About - Partnership -->


                  </ul>
                </li>
                <!-- End About -->
                
              </ul>
            </div>
            <!-- End Navigation -->

            @yield('top-bar')

          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->