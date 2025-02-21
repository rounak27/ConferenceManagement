<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Nepcon 2025</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <link rel="shortcut icon" href="{{asset('images/nepaslogoSmall.png')}}" />

    <!-- Favicons -->
    <link href="{{asset('images/nepaslogoSmall.png')}}" rel="icon" />
    <link href="{{asset('images/nepaslogoSmall.png')}}" rel="apple-touch-icon" />
    @yield('css')

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('lib/venobox/venobox.css')}}" rel="stylesheet" />
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/stylefront.css')}}" rel="stylesheet" />

    <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  </head>

  <body>
    <!--==========================
    Header
  ============================-->
    <header id="header">
      <div class="container">
        <div id="logo" class="pull-left">
          <a href="{{route('landingpage')}}" class="scrollto"
            ><img src="{{asset('images/nepas-logo-hd-.svg')}}" alt="" title=""
          /></a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="{{route('landingpage')}}#intro">Home</a></li>
            <li><a href="{{route('landingpage')}}#about">About</a></li>
            <li><a href="{{route('landingpage')}}#speakers">Message</a></li>
            <li><a href="{{route('landingpage')}}#schedule">Schedule</a></li>

            <!-- Venue Dropdown -->
            <li class="menu-has-children">
              <a href="{{route('landingpage')}}#venue">Guidelines</a>
              <ul>
                <li>
                  <a href="{{route('general-guidelines')}}" target="_blank"
                    >General Instructions</a
                  >
                </li>
                <li>
                  <a href="{{route('abstract-guidelines')}}" target="_blank"
                    >Abstract Guidelines</a
                  >
                </li>
                <li>
                  <a href="{{route('speaker-guidelines')}}">Speaker Guidelines</a>
                </li>
                <!-- <li><a href="#venue-map">Registration Guidelines</a></li> -->
              </ul>
            </li>

            <!-- Hotels Dropdown -->
            <!-- <li class="menu-has-children">
              <a href="#hotels">Hotels</a>
              <ul>
                <li><a href="#hotel-list">Hotel List</a></li>
                <li><a href="#hotel-booking">Hotel Booking</a></li>
              </ul>
            </li> -->

            <!-- <li><a href="#gallery">Gallery</a></li>-->
            <li><a href="{{route('call-for-abstract')}}">Call For Abstract</a></li>
            <li><a href="{{route('landingpage')}}#contact">Contact</a></li>
            <li class="buy-tickets">
              @if(Auth::check())
                <a href="{{route('profile')}}">Profile</a>
              @else
                <a href="{{route('login')}}">Login/Register</a>
              @endif
            </li>
            <!-- <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li> -->
          </ul>
        </nav>
      </div>
    </header>

    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    

    @yield('content')

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-info">
              <img src="{{asset('images/nepas-logo-hd-.svg')}}" alt="NepasLogo" />
              <p>
                Climate Change and its Impact on Children: Safeguarding the
                Future through Specialized Care. A scientific bonanza that
                promises to be a landmark event in the field of paediatrics
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                <li>
                  <i class="fa fa-angle-right"></i> <a href="#">About us</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i> <a href="#">Services</a>
                </li>
                <!-- <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="#">Terms of service</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="#">Privacy policy</a>
                </li> -->
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                <li>
                  <i class="fa fa-angle-right"></i> <a href="#">About us</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i> <a href="#">Services</a>
                </li>
                <!-- <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="#">Terms of service</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="#">Privacy policy</a>
                </li> -->
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Contact Us</h4>
              <p>
                Baluwatar, Kathmandu, Nepal
                <strong>Phone:</strong> +977-9803594327<br />
                <strong>Email:</strong> nepas2010@gmail.com,
                office@nepas.org.np/info@nepas.org.np<br />
              </p>

              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"
                  ><i class="fa fa-instagram"></i
                ></a>
                <a href="#" class="google-plus"
                  ><i class="fa fa-google-plus"></i
                ></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>NepaCon 2025</strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
          Designed by <a href="https://lunivatech.com">Lunivatech</a>
        </div>
      </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Form JavaScript File -->
    <script src="{{asset('contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('js/main.js')}}"></script>
    @yield('script')
  </body>
</html>
