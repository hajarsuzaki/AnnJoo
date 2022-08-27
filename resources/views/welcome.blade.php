@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" data-bs-interval="8000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/aj-4.png);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown">AJE Best-On</h2>
              <h3 class="animate__animated animate__fadeInUp" style="color: white;">The best technology in the domain by maximizing efficiency eNERGY and Telecommunication</h3>
              <div>
                <a href="{{ route('about') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/hero-bg1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/aj-5.png);">
          <div class="carousel-container">
            <div class="carousel-content">
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </div>
</section><!-- End Hero -->
<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row no-gutters">
        <!-- <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div> -->
        <div class="col-xl-5 ">
          <div class="content d-flex flex-column justify-content-center">
            <h3>AJE Best-On Sdn. Bhd.</h3>
            <p>
              AJE Best-On Sdn Bhd known as “Ann Joo Energy” is the best technology in the domain by maximizing efficiency Green Renewable Energy and Telecommunication Infrastructure.
            </p>
            <a href="{{ route('about') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto"><u>Read More<i class="bx bx-right-arrow-alt"></i></u></a>
          </div>
        </div>
        <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
          <div class="content d-flex flex-column justify-content-center">
            <!-- <h3>Voluptatem dignissimos provident quasi</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p> -->
            <div class="row">
              <div class="col-md-6 icon-box">
                <i class="bx bx-sun"></i>
                <h4>Our key strength is to regenerate the energy from Green Technology</h4>
                <!-- <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p> -->
              </div>
              <div class="col-md-6 icon-box">
                <i class="bx bx-shield"></i>
                <h4>Ensures continuous and reliable power production</h4>
                <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p> -->
              </div>
              <div class="col-md-6 icon-box">
                <i class="bx bx-bullseye"></i>
                <h4>Experienced in microwave alignment and monitoring</h4>
                <!-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p> -->
              </div>
              <div class="col-md-6 icon-box">
                <i class="bx bx-broadcast"></i>
                <h4>Telecom solutions provider expertise</h4>
                <!-- <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p> -->
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Services</h2>
        <h4 style="color: #5c9f24;">eNERGY STORAGE SYSTEM</h4>
        <!-- <i class="bi bi-arrow-up-right"></i> -->
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="box">
            <!-- <span>01</span> -->
            <h5>Residential & New Property Development</h5>
            <p>Helps to save up electricity bills significantly.<br>
              Zero carbon-home energy efficiency projects for all the new property development market
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box">
            <h5>Industrial & Enterprise</h5>
            <p>Solar energy will make your enterprise operation environment friendly</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box">
            <h5>Electric Vehicle</h5>
            <p>Sharing power station intelligent power exchange platform is a smart energy ecosystem</p>
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <div class="box">
            <h5>Microgrid</h5>
            <p>Generally adjusted to regions with lacking or insufficient force gracefully, for a moderately dependable and nearby energy</p>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="box">
            <h5>IPV LED</h5>
            <p>It has high-performance bright lights, featherweight product, universal and is made up of interchangeable parts</p>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div><br>
      <h4 style="color: rgba(103, 176, 209, 0.8); text-align: center">TELECOMMUNICATION</h4><br />
      <div class="row">
        <div class="col-lg-4">
          <div class="box-1">
            <h5>Telecom Fibre Deployment</h5>
            <p>Provide complete OSP services </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box-1">
            <h5>Backhole and Building Design, Installation & Optimization</h5>
            <!-- <p>Experienced in microwave alignment and monitoring</p> -->
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box-1">
            <h5>Microwave Installation & Commissioning</h5>
            <p>Experienced in microwave alignment and monitoring</p>
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <div class="box-1">
            <h5>Telecom Equipment Installation</h5>
            <p>Provide services to install, test & commissioning of rectifier, inverter, backup battery and base transceiver station (BTS).</p>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="box-1">
            <h5>Tower Infrastructure & CME Installation & Optimization (Remote Monitoring)</h5>
            <p>We offer professional tower infra services to our clients to streamline their communication and data transmission process</p>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
  </section><!-- End Services Section -->
  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="text-center">
        <h3 class="animated slideInRight">Why Choose Us</h3>
        <h5 style="color:aliceblue; font-weight: 10px">We provide our customers with unbeatable service, while providing top quality products and we are committed towards enhancing customer satisfaction.</h5 style="color:aliceblue; font-weight: 200px">
        <!-- <a class="cta-btn" href="#">Call To Action</a> -->
      </div>

    </div>
  </section><!-- End Cta Section -->
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <a href="{{ route('portfolio') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto"><u>More on Portfolio<i class="bx bx-right-arrow-alt"></i></u></a>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">ALL</li>
              <li data-filter=".filter-app">eNERGY</li>
              <li data-filter=".filter-card">TELECOMMUNICATION</li>
              <!-- <li data-filter=".filter-web">Web</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/telco-1.jpg" class="img-fluid" alt="" style="width: 307px; height: auto">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/telco-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/telco-2.jpg" class="img-fluid" alt="" style="width: 307px; height: 307px">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/telco-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/telco-3.png" class="img-fluid" alt="" style="width: 307px; height: 307px">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/telco-3.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/telco-4.png" class="img-fluid" alt="" style="width: 307px; height: 307px">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/img/telco-4.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>We are here to provide you with more information, answer any questions you may have and create an effective solution for your instructional needs.</p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <address>15, Jalan Utas 15/7, Seksyen 15, 40200 Shah Alam, Selangor.</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+603-7874 2233">+603-7874 2233</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3>Fax</h3>
            <p><a href="">+603-7873 5763</a></p>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d127491.6508540039!2d101.50841139003263!3d3.064159614886168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e3!4m0!4m5!1s0x31cc528316f586c1%3A0x6ae9f0720515073d!2sAnn%20Joo%20Metal%20Sdn.%20Bhd%2C%2015%2C%20Jalan%20Utas%2015%2F7%2C%20Seksyen%2015%2C%2040200%20Shah%20Alam%2C%20Selangor!3m2!1d3.0625727!2d101.53322949999999!5e0!3m2!1sen!2smy!4v1661066547516!5m2!1sen!2smy" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6 ">
          <div class="form">
            <form action="{{ route('send_mail')}}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group mt-3">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->
</main>

@endsection