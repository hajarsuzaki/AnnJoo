@extends('layouts.app')
@section('title')
    About Us
@endsection
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About Us</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>About Us</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-12">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="portfolio-info">
                            <div class="row gy-12">
                                <div class="col-lg-12">
                                    <p style="font-size: 16px; color: #1165F8; text-align: justify;">
                                        <b>Provision of architecture, engineering, procurement, construction and commissioning for solar and other renewable energy business, 
                                        telecommunication infrastructure, general project management and contract services.</b>
                                    </p>
                                </div>
                            </div>
                            <p style="font-size: 16px; color: black; text-align: justify;">
                                <b>AJE Best-On Sdn. Bhd.</b> offers cutting-edge Solar Hybrid and Renewable Energy Solutions with technology that optimizes green energy 
                                efficiency. We specialize in design and installation of custom roof mount, ground mount, tracking, and E2E solar systems to accommodate your 
                                unique needs, energy goals, and location.
                            </p>
                            <div class="row gy-12">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <img src="assets/img/energy/ess.jpg" alt=""
                                        style="width: 300px; height: auto; border-radius: 25px;">
                                </div>
                                {{-- <div class="col-lg-2"><br></div>
                            <div class="col-lg-3">
                            </div> --}}
                                <div class="col-lg-4"></div>
                            </div><br>
                            <p style="font-size: 16px; color: black; text-align: justify;">
                                Our key competency is our unparalleled capacity to regenerate energy from a diverse range of green technology such as Solar and Grid, thereby 
                                leveraging their complementary nature in profile to ensure consistent and dependable power production. AJE Technology strives to deliver 
                                reliable and sustainable energy solutions for your business needs.<br><br>

                                We offer comprehensive renewable energy solutions that can seamlessly integrate with various Renewable Energy (“RE”) technologies.
                                We also possess the expertise to effectively implement solar energy sources which supply energy to diverse industries, particularly 
                                telecommunications industry.<br><br>

                                With our technology domain in maximizing green efficiency, we aim to help the environment, save on utility bills and increase the value of 
                                your property. By partnering with AJE, you can access solar easily and affordably through a seamless process. Reducing utility costs doesn't 
                                have to be your chore, trust AJE to handle it all.
                            </p>
                            <br>
                            <div class="row gy-12">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4">
                                    <img src="assets/img/aj_solar/aj_solar4.jpeg" alt="assets/img/aj_solar/aj_solar4.jpeg"
                                        style="width: 300px; height: auto; border-radius: 25px;">
                                </div>
                                &nbsp;
                                {{-- <div class="col-lg-2"><br></div> --}}
                                <div class="col-lg-4">
                                    <img src="assets/img/aj_solar/aj_solar9.jpeg" alt="assets/img/aj_solar/aj_solar9.jpeg"
                                        style="width: 300px; height: auto; border-radius: 25px;">
                                </div>
                                <div class="col-lg-2"></div>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
