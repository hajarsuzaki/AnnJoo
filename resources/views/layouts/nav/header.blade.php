<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><img src="{{asset('assets/img/anjoo.png')}}" alt="logo" data-src="{{asset('assets/img/anjoo.png')}}"
                 data-src-retina="{{ asset('assets/img/anjoo.png')}}" width="50" height="auto"><a href="{{ route('welcome') }}">&nbsp;AJE Best-on</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('welcome') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('about') }}">About</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('energy') }}">Green Renewable Energy</a></li>
              <li><a href="{{ route('telecommunication')}}">Telecom Solutions</a></li>
            </ul>
          </li>
          <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
          <li><a class="nav-link scrollto" href="{{ route('why_us') }}">Why Choose Us?</a></li>
          <li><a class="nav-link scrollto " href="{{ route('portfolio') }}">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="{{ route('welcome') }}#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{ asset('assets/doc/company_profile.pdf') }}" target="_blank"><i class="bi bi-download"></i>&nbsp;&nbsp;Company Profile</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->