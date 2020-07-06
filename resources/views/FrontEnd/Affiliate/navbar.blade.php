@php $user = Auth::user() @endphp
 <!-- Profile Sidebar -->
          <div class="col-lg-2 g-mb-50 g-mb-0--lg">
            <!-- User Image -->
            <div class="u-block-hover g-pos-rel">
              <figure>
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="/assets/img/uploads/Affiliate/Profile/{{$user->affiliate->id}}/{{$user->affiliate->img}}" alt="Image Description">
              </figure>

              <!-- User Info -->
              <span class="g-pos-abs g-top-20 g-left-0">
                  <a class="btn btn-sm u-btn-primary rounded-0" href="#">{{Auth::user()->name}}</a>
                  
              </span>
              <!-- End User Info -->
            </div>
            <!-- User Image -->

            <!-- Sidebar Navigation -->
            <div class="list-group list-group-border-0 g-mb-40">
              <!-- Overall -->
              <a href="/affiliate/home" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i> home</span>
                
              </a>
              <!-- End Overall -->

              <!-- Profile -->
              <a href="/affiliate/profile" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-cursor g-pos-rel g-top-1 g-mr-8"></i> Profile</span>
              </a>
              <!-- End Profile -->

              <!-- Users Contacts -->
              <a href="/affiliate/referrer" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Referer Links</span>
              </a>
              <!-- End Users Contacts -->

            </div>
            <!-- End Sidebar Navigation -->
           
          </div>
          <!-- End Profile Sidebar -->