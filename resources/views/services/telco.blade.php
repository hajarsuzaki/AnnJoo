@extends('layouts.app')
@section('title')
Telecommunication
@endsection
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Telecom Engineering Services</h2>
                <ol>
                    <li><a href="{{ route('welcome')}}">Home</a></li>
                    <li>Telecom Engineering Services</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details-tel" class="portfolio-details-tel">
        <div class="container">
            <div class="row gy-12">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-group">
                                <div class="card" style="background: linear-gradient(180deg, #137FC1 -7.18%, #0A71B1 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/slide/aj-1.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/slide/aj-1.jpg') }}" style="width:fit-content; height: 290px; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #DCEEFA">Telecom Fibre & 5G Integrator</h5>
                                        <p class="card-text" style="color: white; text-align: justify">
                                            We provide complete On-Site Plant (“OSP”) services include installing aerial cable, direct-buried cable, underground cable in 
                                            conduit, installing conduit and pulling cable, micro trenching, Horizontal Directional Drilling (“HDD”), cables through sewer, 
                                            splicing cables, fibre termination, utility pole replacement and Optical time-domain reflectometer (“OTDR”) testing.
                                        </p>    
                                    </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #137FC1 -7.18%, #0A71B1 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/telecom/microwave_install.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/telecom/microwave_install.jpg') }}" style="width:fit-content; height: 290px; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #DCEEFA">Microwave Installation & Commissioning</h5>
                                        <p class="card-text" style="color: white; text-align: justify">
                                            As technology shifts and improves, carriers need to upgrade their equipment.
                                        </p>
                                        <p class="card-text" style="color: white; text-align: justify">
                                            Our team is not only familiar with all major carrier technologies, but also experienced in microwave alignment and monitoring. We strive to make any equipment upgrade as 
                                            streamlined as possible with little to no carrier down time. We provide installation, testing & commissioning services for PDH & SDH 
                                            equipment along with various sizes of antennas.
                                        </p>
                                    </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #137FC1 -7.18%, #0A71B1 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/telecom/telecom_install.jpeg') }}" class="card-img-top" alt="{{ asset('assets/img/telecom/telecom_install.jpeg') }}" style="width:fit-content; height: 290px">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #DCEEFA">Telecom Equipment Installation </h5>
                                        <p class="card-text" style="color: white; text-align: justify">
                                            We provide services to install, test & commissioning of rectifier, inverter, backup battery and base transceiver station (BTS).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-group">
                                <div class="card" style="background: linear-gradient(180deg, #137FC1 -7.18%, #0A71B1 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/telecom/ti_cme.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/telecom/ti_cme.jpg') }}" style="width:fit-content; height: 290px; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #DCEEFA">Tower Infrastructure & CME (Full Turn Key)</h5>
                                        <p class="card-text" style="color: white; text-align: justify">
                                        We offer professional tower infra services to our clients to streamline their communication and data transmission process.
                                        </p>
                                        <p class="card-text" style="color: white; text-align: justify">
                                        In addition, personal tower solutions have several benefits that companies aiming to expand must avail in today’s day and age.
                                        </p>
                                        <p class="card-text" style="color: white; text-align: justify">
                                         We also handle project scopes for all sizes, whether it is constructing new telecommunications towers, reinforcing, or modifying existing towers, installing
                                        lines and antennas, or performing maintenance on existing structures.
                                        </p>
                                    </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #137FC1 -7.18%, #0A71B1 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/telecom/backhaul_1.jpeg') }}" class="card-img-top" alt="{{ asset('assets/img/telecom/backhaul_1.jpeg') }}" style="width:fit-content; height: 290px; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #DCEEFA">Backhaul & Inbuilding (IBS) Installation</h5>
                                        <p class="card-text" style="color: white; text-align: justify">
                                            We provide Inbuilding design, installation of distributed antenna system, fiber optic splicing and testing, 
                                            Civil, Electrical and Mechanical works.
                                        </p>    
                                    </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #137FC1 -7.18%, #0A71B1 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/telecom/network_monitor.jpeg') }}" class="card-img-top" alt="{{ asset('assets/img/telecom/network_monitor.jpeg') }}" style="width:fit-content; height: 290px">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #DCEEFA">Network Optimization & Remote Monitoring System (RMS)</h5>
                                        <p class="card-text" style="color: white; text-align: justify">
                                            A lot of business sectors are turning to Network Optimization & Remote Monitoring Systems (RMS) as solutions for automating 
                                            many different business operations. RMS are usually comprised of a combination of :<br>
                                            <ul style="color: white">
                                                <li>Hardware Sensors</li>
                                                <li>Computer System Centralization</li>
                                                <li>Network Connectivity</li>
                                                <li>Graphical for info feed in</li>
                                                <li>Electronic devices that take an action based on user or system assessment</li>
                                            </ul>
                                        </p>
                                        <p class="card-text" style="color: white; text-align: justify">
                                        Once you understand the benefits that a Remote Monitoring System can bring to your business operations, the next question naturally 
                                        arises: how can you implement it effectively? In this regard, it is important to consider several essential factors. We can guide you 
                                        through the implementation process by enabling you to collect real-time equipment and production data, which can improve the efficiency 
                                        of on-site management, reduce costs, minimize material waste, and achieve lean production.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection