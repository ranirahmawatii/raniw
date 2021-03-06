<!doctype html>
<html lang="en">
  <head>
    <title>YourAgent &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/aos.css')}}">

    <link rel="stylesheet" href="f{{asset('assets/frontend/onts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/fontawesome/css/font-awesome.min.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
  </head>
  <body>

    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><a href="index.html">YourAgent</a></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6">
                      <ul class="list-unstyled menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="active"><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 extra-info">
                      <div class="row">
                        <div class="col-md-6 mb-5">
                          <h3>Contact Info</h3>
                          <p>98 West 21th Street, Suite 721 <br> New York NY 10016</p>
                          <p>info@yourdomain.com</p>
                          <p>(+1) 435 3533</p>

                        </div>
                        <div class="col-md-6">
                          <h3>Connect With Us</h3>
                          <ul class="list-unstyled">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero overlay" style="background-image: url(assets/frontend/img/boneka.jpeg)">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
          <div class="col-md-7 text-left mr-auto">
            <h1 class="heading" data-aos="fade-up">My Blog</h1>
          </div>
        </div>
        <a href="#next-section" class="smoothscroll scroll-down">Scroll Down</a>
      </div>
    </section>
    <!-- END section -->


    <section class="section bg-light post" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row mb-5">

              {{-- <div class="col-12">
                <div class="row">
                  <div class="col-md-6">
                    <p><img src="img/img_1.jpg" alt="Image" class="img-fluid"></p>
                  </div>
                  <div class="col-md-6">
                    <p><img src="img/img_2.jpg" alt="Image" class="img-fluid"></p>
                  </div>
                </div> --}}
              </div>

                      <div class="row">
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up">
         <a href="{{url('/elmo')}}"><img src="{{asset('assets/frontend/img/elmo.png')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.html">$25.000</a></h3>
            <div class="reviews-star float-left">

            </div>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="100">
            <a href="{{url('/hello')}}"><img src="{{asset('assets/frontend/img/hello.jpeg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.html">$30.000</a></h3>
            <div class="reviews-star float-left">

            </div>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="200">
            <a href="{{url('/mini')}}"><img src="{{asset('assets/frontend/img/mini.jpeg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.html">$50.000</a></h3>
            <div class="reviews-star float-left">

            </div>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="300">
            <a href="{{url('/beruang')}}"><img src="{{asset('assets/frontend/img/beruang.jpeg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.html">$40.000</a></h3>
            <div class="reviews-star float-left">
            </div>
            </div>
             <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-up" data-aos-delay="300">
            <a href="{{url('/keropi')}}"><img src="{{asset('assets/frontend/img/keropi.jpeg')}}" alt="Image placeholder" class="img-fluid rounded"> </a>
            <h3><a href="property-single.html">$40.000</a></h3>
            <div class="reviews-star float-left">

            </div>

            </div>


          </div>
    </section>


    <footer class="section footer-section bg-primary">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Help</a></li>
             <li><a href="#">Rooms</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">Our Location</a></li>
              <li><a href="#">The Hosts</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Restaurant</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <p><span class="d-block">Address:</span> <span> 98 West 21th Street, Suite 721 New York NY 10016</span></p>
            <p><span class="d-block">Phone:</span> <span> (+1) 435 3533</span></p>
            <p><span class="d-block">Email:</span> <span> info@yourdomain.com</span></p>
          </div>
          <div class="col-md-3 mb-5">
            <p>Sign up for our newsletter</p>
            <form action="#" class="footer-newsletter">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your email...">
                <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
              </div>
            </form>
          </div>
        </div>
        <div class="row bordertop pt-5">
          <p class="col-md-6 text-left">&copy; Copyright 2019. All Rights Reserved. Carefully crafted by <a href="https://colorlib.com/">Colorlib</a></p>

          <p class="col-md-6 text-right social">
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-instagram"></span></a>
          </p>
        </div>
      </div>
    </footer>

    <script src="{{asset('assets/frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/aos.js')}}"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>
  </body>
</html>
