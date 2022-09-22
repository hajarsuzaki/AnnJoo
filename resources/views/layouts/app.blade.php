<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AJE - @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- change website icon -->
  <link href="{{ asset('assets/img/anjoo.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
    @yield('css')
</head>
<body>
@include('layouts.nav.header')

@yield('content')
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
        <div class="col-lg-2 col-md-4"></div>
          <div class="col-lg-6 col-md-12">
            <div class="footer-info">
              <h3>AJE Best-On Sdn Bhd<span style="font-size: 19px">&nbsp;(15952-A)</span></h3>
              <p style="font-size: 16px">
                Jalan Gergaji 15/14, <br>40200 Shah Alam, Selangor Darul Ehsan,<br>Malaysia.<br>
              <p style="font-size: 16px">Phone: +603-5524 5883</p>
              <p style="font-size: 16px">Fax: +603-5524 4883</p>
              <p style="font-size: 16px">Email: <u>enquiry@ajebest-on.com.my</u></p><br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('welcome') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="{{ asset('assets/doc/annjoo_privacy_policy.pdf') }}" target="_blank">Privacy policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>AJE Best-On Sdn. Bhd.<span> {{ date('Y') }}</span></strong>. All Rights Reserved
      </div>
      {{-- <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/groovin-free-bootstrap-theme/ -->
        Designed by Alphacore Technology Sdn. Bhd. 
      </div><br> --}}
      <br>
      <p style="font-size: 9px">
        DISCLAIMER : The information contained in this website has been prepared solely for the purpose of providing information about AJE Best-On and the services that
        we offer. By accessing this website you agree that AJE Best-On will not be liable for any direct, indirect or consequential loss arising from the use of the 
        information and material contained in this web site or from your access of other material on the internet via web links from this site. The above exclusions and 
        limitations apply only to the extent permitted by law. Images, trade marks and brands displayed on this site are protected by copyright, trade mark and other 
        intellectual property laws and may not be reproduced or appropriated in any manner without written permission of their respective owner(s). You may only print or 
        download the contents of this website for your own personal, non-commercial use. You are otherwise not permitted to copy, broadcast, download, store (in any medium), 
        transmit, adapt or change in any way the contents of this website without the prior written permission of the AJE Best-On. Unauthorized modification of any 
        information on this website may result in criminal prosecution.
      </p>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <!-- <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script> -->

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>