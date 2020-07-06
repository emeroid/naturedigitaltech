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
            <a href="/home" class="navbar-brand d-flex">
              <img src="{{asset('assets/img/logo/edeh-logo.png')}}" alt="Nature Digital Technology">
            </a>
            <!-- End Logo -->

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto ">
                

                <!-- Order -->

                <li class="nav-item g-mx-10--lg g-mx-15--xl">
                  <a href="{{route('admin.order.index')}}" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0">Order</a>
                </li>
                 
                <!-- End Order -->
                  

                <!-- Products -->
                <li class="hs-has-sub-menu nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages">Product</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-pages" aria-labelledby="nav-link-pages">
                    
                    <!-- Order - List -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="{{route('admin.product.index')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">All Products</a>
                    </li>
                    <!-- End Order - List -->

                    <!-- Order - create -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="{{route('admin.product.create')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Create Product</a>
                    </li>
                    <!-- End Order - create -->

                  </ul>
                </li>
                <!-- End Products -->

                
                <!-- Category -->
                <li class="hs-has-sub-menu nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages">Category</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-pages" aria-labelledby="nav-link-pages">
                    
                    <!-- Category - List -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="{{route('admin.category.index')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">All Category</a>
                    </li>
                    <!-- End Category - List -->

                    <!-- Category - create -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="{{route('admin.category.create')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Create Category</a>
                    </li>
                    <!-- End Category - create -->

                  </ul>
                </li>
                 
                <!-- End Category -->


                <!-- Users -->
                <li class="hs-has-sub-menu nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages">Clients</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-pages" aria-labelledby="nav-link-pages">

                    <!-- Users - List -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="{{route('admin.client.affiliate.index')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Affiliate</a>
                    </li>
                    <!-- End Users - List -->
                    
                    <!-- Users - List -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="{{route('admin.client.request.index')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Request</a>
                    </li>
                    <!-- End Users - List -->

                    <!-- Users - create -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="{{route('admin.client.worker.index')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Workers</a>
                    </li>
                    <!-- End Users - create -->

                  </ul>
                </li>
                 
                <!-- End Users -->

                   <!-- Training -->
                <li class="hs-has-sub-menu nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages">Training</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-pages" aria-labelledby="nav-link-pages">
                    
                    <!-- Description - List -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="{{route('admin.training.description.show')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Description</a>
                    </li>
                    <!-- End Description - List -->

                    <!-- Trainees - View -->
                     <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="{{route('admin.training.trainee.index')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Trainee</a>
                    </li> 
                    <!-- End Trainees - View -->

                  </ul>
                </li>
                 
                <!-- End Order -->


                <!-- Page -->
                <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link--blog" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--blog">Page</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu--blog" aria-labelledby="nav-link--blog">
                    <!-- Page - Company -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--blog--single-item" class="nav-link" href="{{route('admin.page.company.show')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--blog--single-item">Company</a>
                      
                    </li>
                    <!-- End Page - Company -->


                    <!-- Blog - FAQ -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--blog--grid-classic" class="nav-link" href="{{route('admin.page.faq.index')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--blog--grid-classic">FAQ</a>

                    </li>
                    <!-- End Page - FAQ -->

                    <!-- Page - Job -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--blog--grid-overlap" class="nav-link" href="{{route('admin.page.job.show')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--blog--grid-overlap">Job</a>
                      
                    </li>
                    <!-- End Page - Job -->
                    
                     <!-- Page - Terms -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--blog--grid-overlap" class="nav-link" href="{{route('admin.page.terms')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--blog--grid-overlap">Terms</a>
                      
                    </li>
                    <!-- End Page - Terms -->

                  </ul>
                </li>
                <!-- End Page -->

                <!-- Settings -->
                <li class="hs-has-sub-menu nav-item  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn" data-animation-out="fadeOut">
                  <a id="nav-link-pages" class="nav-link g-py-7 g-color-white-opacity-0_8 g-px-0" href="#" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-pages">Setting</a>

                  <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling" id="nav-submenu-pages" aria-labelledby="nav-link-pages">

                    <!-- Settings - List -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="{{route('admin.setting.slider')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Slider</a>
                    </li>
                    <!-- End Settings - List -->
                    
                    <!-- Settings - List -->
                    <li class="dropdown-item ">
                      <a id="nav-link--pages--about" class="nav-link" href="{{route('admin.setting.home.content')}}" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu--pages--about">Home</a>
                    </li>
                    <!-- End Settings - List -->

                    <!-- Settings - create -->
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
                    <!-- End Settings - create -->

                  </ul>
                </li>
                 
                <!-- End Users -->
                
              </ul>
            </div>
            <!-- End Navigation -->

            @yield('top-bar')

          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->