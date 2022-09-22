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
                <h2>Telecommunication</h2>
                <ol>
                    <li><a href="{{ route('welcome')}}">Home</a></li>
                    <li>Telecom Solutions</li>
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
                                        <img src="{{ asset('assets/img/telecom/fibre_deployment.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/telecom/fibre_deployment.jpg') }}" style="width:fit-content; height: auto; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #DCEEFA">Telecom Fibre Deployment</h5>
                                        <p class="card-text" style="color: white; text-align: justify">
                                            We provide complete OSP services include installing aerial cable, direct-buried cable, underground cable in conduit, installing 
                                            conduit and pulling cable, micro trenching, HDD, cables through sewer, splicing cables, fibre termination, utility
                                            pole replacement and OTDR testing.
                                        </p>    
                                    </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #137FC1 -7.18%, #0A71B1 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/telecom/microwave_install.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/telecom/microwave_install.jpg') }}" style="width:fit-content; height: auto; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #DCEEFA">Microwave Installation & Commissioning</h5>
                                        <p class="card-text" style="color: white; text-align: justify">
                                            As technology shifts and improves, carriers need to upgrade their equipment. Our team is not only familiar with 
                                            all major carrier technologies, but also experienced in microwave alignment and monitoring. We strive to make any equipment upgrade as 
                                            streamlined as possible with little to no carrier down time. We provide installation, testing & commissioning services for PDH & SDH 
                                            equipment along with various sizes of antennas.
                                        </p>
                                    </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #137FC1 -7.18%, #0A71B1 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/telecom/telecom_install.png') }}" class="card-img-top" alt="{{ asset('assets/img/telecom/telecom_install.png') }}" style="width:fit-content; height: 290px">
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
                                        <img src="{{ asset('assets/img/telecom/ti_cme.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/telecom/ti_cme.jpg') }}" style="width:fit-content; height: auto; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #DCEEFA">Tower Infrastructure & CME (Full Turn Key)</h5>
                                        <p class="card-text" style="color: white; text-align: justify">
                                            AJE Best-On offer professional tower infra services to our clients to streamline their communication and data transmission process.
                                                In addition, personal tower solutions have several benefits that companies aiming to expand must avail in today’s day and age. We also handle
                                                project scopes for all sizes, whether it is constructing new telecommunications towers, reinforcing, or modifying existing towers, installing
                                                lines and antennas, or performing maintenance on existing structures.
                                        </p>
                                    </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #137FC1 -7.18%, #0A71B1 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/telecom/backhaul_1.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/telecom/backhaul_1.jpg') }}" style="width:fit-content; height: auto; ">
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
                                        <img src="{{ asset('assets/img/telecom/network_monitor.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/telecom/network_monitor.jpg') }}" style="width:fit-content; height: 290px">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #DCEEFA">Network Optimization & Monitoring System (RMS)</h5>
                                        <p class="card-text" style="color: white; text-align: justify">
                                            More and more business sectors are turning to Network Optimization & Remote Monitoring Systems (RMS) as solutions for automating 
                                            many different business operations. RMS are usually comprised of a combination of :<br>
                                            - Sensors<br>
                                            - Network connections<br>
                                            - Central computer system<br>
                                            - Interfaces for human input<br>
                                            - Actuators, which are mechanical or electronic devices that take an action based on user or system feedback
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