@php
  use App\BasicInfoSetting;
  
  $data = BasicInfoSetting::orderBy('id','DESC')->first();

            $language = session()->get('lang');
@endphp



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $data->title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/animate.css">
    

    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/ionicons.min.css">
    
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/icomoon.css">

    <link rel="shortcut icon" href="{{ asset('Public/setting/favicon').'/'.$data->favicon }}" type="image/x-icon">

  </head>
  <body>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="{{ route('frontend.home')}}"> <span>{{ $data->title}}</span> </a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>{{ $data->email}}</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Call</span>
						    	<span>Call Us: {{$data->phone}}</span>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">


                

                @if (Auth::check())
                <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                      @php
                          $auth_user = Auth::user();
                      @endphp
                      <img src=" {{ asset('Public/user/images').'/'. $auth_user->image}}  "
                          style="height: 30px; width: 32px; margin-right: 6px;" 
                          class="brand-image img-circle elevation-3" style="opacity: .8">{{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="background-color: #FC5F00;">
                      {{-- <span
                          class="dropdown-item dropdown-header">{{ $language == 'finish' ? 'Tilin asetukset' : 'Account Setting' }}</span>
                      <div class="dropdown-divider"></div>
                      <a href="{{ route('profile.view') }}" class="dropdown-item">
                          <i class="fas fa-user mr-2"></i>
                          {{ $language == 'finish' ? 'Oma profiili' : 'View Profile' }}

                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="{{ route('profile.edit', Auth::user()->slug) }}" class="dropdown-item">
                          <i class="fas fa-edit mr-2"></i>
                          {{ $language == 'finish' ? 'Muokkaa profiili' : 'Edit Profile' }}

                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="{{ route('password.change') }}" class="dropdown-item">
                          <i class="fas fa-lock mr-2"></i>
                          {{ $language == 'finish' ? 'Vaihda salasana' : 'Change Password' }}

                      </a> --}}
                      
                      <div class="dropdown-divider"></div>
                      <a href="{{ route('subscription')}}" class="dropdown-item">
                          <i class="fas fa-lock mr-2"></i>
                          {{ "Subscription" }}

                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="{{ route('full_tutorials')}}" class="dropdown-item">
                          <i class="fas fa-lock mr-2"></i>
                          {{ "Full Tutorials" }}

                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="{{ route('result') }}" class="dropdown-item">
                          <i class="fas fa-lock mr-2"></i>
                          {{ "Result" }}

                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="{{ route('exam')}}" class="dropdown-item">
                          <i class="fas fa-lock mr-2"></i>
                          {{ "Exam" }}

                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="{{ route('previous_questions') }}" class="dropdown-item">
                          <i class="fas fa-lock mr-2"></i>
                          {{ "Peivious Questions" }}

                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                          class="dropdown-item">
                          <i class="fas fa-sign-out-alt mr-2"></i>
                          {{ $language == 'finish' ? 'Kirjaudu ulos' : 'Logout' }}

                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>

                @else
                    
					    		<a href="{{ route('signup.form') }}" class="btn py-2 px-3 btn-primary mr-2">
					    			<span>Sign Up</span>
					    		</a>
                  <br>
					    		<a href="{{ route('login.form')}}" class="btn py-2 px-3 btn-primary  ">
					    			<span>Login</span>
					    		</a>

                @endif

					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      {{-- <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form> --}}
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item {{ Request::is('/')? 'active' : ''}}"><a href="{{ route('frontend.home')}}" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item {{ Request::is('exam-result/*') || Request::is('exam-result')  ? 'active' : ' '}}"><a href="{{ route('exam_result')}}" class="nav-link">Exam Result</a></li>
	        	<li class="nav-item {{ Request::is('free-tutorials/*') ? 'active' : ' '}}"><a href="{{ route('free_tutorials')}}" class="nav-link">Free Tutorials</a></li>
	        	<li class="nav-item {{ Request::is('subscription-package') ? 'active' : ' '}}"><a href="{{ route('subscription_package')}}" class="nav-link">Subscription Package</a></li>
	          <li class="nav-item {{ Request::is('contacts')? 'active' : ''}}"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	@yield('content')

	

		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">{{$data->address}}</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{$data->phone}}</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{$data->email}}</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          {{-- <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{asset('assets/frontend')}}/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{asset('assets/frontend')}}/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          <div class="col-md-6 col-lg-3">
            {{-- <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div> --}}
          </div>
          <div class="col-md-6 col-lg-3">
            {{-- <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div> --}}
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="{{ $data->linkedin_link}}"><span class="icon-linkedin"></span></a></li>
                <li class="ftco-animate"><a href="{{ $data->fb_link}}"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="{{ $data->youtube_link}}"><span class="icon-youtube"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> {!! html_entity_decode($data->copywright_text) !!} <i class="icon-heart" aria-hidden="true"></i>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('assets/frontend')}}/js/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
  {!! Toastr::message() !!}
  <script src="{{ asset('assets/frontend')}}/js/jquery-migrate-3.0.1.min.js"></script>
  {{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> --}}
  <script src="{{ asset('assets/frontend')}}/js/popper.min.js"></script>
  <script src="{{ asset('assets/frontend')}}/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets/frontend')}}/js/jquery.easing.1.3.js"></script>
  <script src="{{ asset('assets/frontend')}}/js/jquery.waypoints.min.js"></script>
  <script src="{{ asset('assets/frontend')}}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('assets/frontend')}}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('assets/frontend')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('assets/frontend')}}/js/aos.js"></script>
  <script src="{{ asset('assets/frontend')}}/js/jquery.animateNumber.min.js"></script>
  <script src="{{ asset('assets/frontend')}}/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('assets/frontend')}}/js/google-map.js"></script>
  <script src="{{ asset('assets/frontend')}}/js/main.js"></script>

<script>
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
    
  </body>
</html>