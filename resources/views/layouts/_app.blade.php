<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webextheme.com/html/interar/v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2024 11:54:02 GMT -->

<head>
  <meta charset="UTF-8" />
  <meta name="author" content="Interar" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Interar Interior & Architecture HTML Template" />
  <meta name="keywords"
    content="architecture, interior, decoration, design, corporate, modern, html, template, multipurpose, creative" />
  <title>Interar - Interior & Architecture HTML Template</title>
  <link href="{{asset("/public/assets/images/favicon.png")}}" rel="shortcut icon" type="image/png" />

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="{{asset("/public/assets/css/style.css")}}" />
  <link rel="stylesheet" href="{{asset("/public/assets/css/responsive.css")}}" />
  <link rel="stylesheet" href="{{asset("/public/assets1/css/style.css")}}" />
  <link rel="stylesheet" href="{{asset("/public/assets1/css/responsive.css")}}" />

</head>
<body>
    <!-- Preloader Start -->
    <section>
      <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
          <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
              <span data-text-preloader="Q" class="letters-loading">Q</span>
              <span data-text-preloader="U" class="letters-loading">U</span>
              <span data-text-preloader="A" class="letters-loading">A</span>
              <span data-text-preloader="T" class="letters-loading">T</span>
              <span data-text-preloader="T" class="letters-loading">T</span>
              <span data-text-preloader="R" class="letters-loading">R</span>
              <span data-text-preloader="O" class="letters-loading">O</span>
            </div>
          </div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
      </div>
    </section>

@include('layouts._header')
@yield('content')
@include('layouts._footer')



<!-- Mobile Nav Sidebar Content Start -->
<div class="mobile-nav-wrapper">
    <div class="mobile-nav-overlay mobile-nav-toggler"></div>
    <div class="mobile-nav-content">
      <a href="#" class="mobile-nav-close mobile-nav-toggler">
        <span></span>
        <span></span>
      </a>
      
      <div class="mobile-nav-container"></div>
      <ul class="list-items mobile-sidebar-contact">
        <li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>121 King Street, Australia</li>
        <li><span class="fas fa-envelope mrr-10 text-primary-color"></span><a
            href="mailto:example@gmail.com">example@gmail.com</a></li>
        <li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span><a href="tel:123456789">+12 345 666 789</a>
        </li>
      </ul>
      
      <ul class="social-list list-primary-color">
        <li>
          <a href="https://www.facebook.com/quattro.tunisie/"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="https://www.tiktok.com/@quattrotunisie?"><i class="fab fa-tiktok"></i></a>
        </li>

        <li>
          <a href="https://www.linkedin.com/company/quattro-tunisie/?originalSubdomain=tn"><i class="fab fa-linkedin"></i></a>
        </li>
        <li>
          <a href="https://www.instagram.com/quattro_officiel/"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </div> 
  <!-- Mobile Nav Sidebar Content End -->
  <!-- Header Search Popup Start -->
  <div class="search-popup">
    <div class="search-popup-overlay search-toggler"></div>
    <div class="search-popup-content">
      <form action="{{url('/search')}}">
        <label for="search" class="sr-only">search here</label>
        <input type="search" name="query"id="search" placeholder="Search Here..." />
        <button type="submit" aria-label="search submit" class="thm-btn">
          <i class="base-icon-search-1"></i>
        </button>
      </form>
    </div>
  </div>
  <!-- Header Search Popup End -->
  <!-- Back to Top Start -->
  <div class="anim-scroll-to-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- Back to Top end -->
  <!-- Integrated important scripts here -->
  <script src="{{asset("/public/assets/js/jquery-3.6.0.min.js")}}"></script>
  <script src="{{asset("/public/assets/js/jquery.nice-select.min.js")}}"></script>
  <script src="{{asset("/public/assets/js/bootstrap.min.js")}}"></script>
  <script src="{{asset("/public/assets/js/jquery.appear.min.js")}}"></script>
  <script src="{{asset("/public/assets/js/wow.min.js")}}"></script>
  <script src="{{asset("/public/assets/js/owl.carousel.min.js")}}"></script>
  <script src="{{asset("/public/assets/js/jquery.event.move.js")}}"></script>
  <script src="{{asset("/public/assets/js/jquery.twentytwenty.js")}}"></script>
  <script src="{{asset("/public/assets/js/tilt.jquery.min.js")}}"></script>
  <script src="{{asset("/public/assets/js/magnific-popup.min.js")}}"></script>
  <script src="{{asset("/public/assets/js/backtotop.js")}}"></script>
  <script src="{{asset("/public/assets/js/trigger.js")}}"></script>
  <script src="{{asset("/public/assets/js/slick.js")}}"></script>
</body>
</html>