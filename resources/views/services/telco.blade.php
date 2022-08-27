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
                    <li>Telecommunication</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details-tel" class="portfolio-details-tel">
        <div class="container">
            <div class="row gy-12">
                <div class="col-lg-12">
                    <div class="portfolio-description">
                        <h2 style="text-align: center; color: rgb(58, 161, 201);">Telecommunication Solution</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-info">
                                <div class="table-responsive">
                                    <table>
                                        <tr>
                                            <td colspan="3"><h3>Backhole and Building Design, Installation & Optimization</h3></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <p style="font-size: 15px; color: black; text-align: justify">
                                                    We provide Inbuilding design, installation of distributed antenna system, fiber optic splicing and testing, Civil, Electrical and Mechanical works.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('assets/img/inbuilding.png') }}" alt="" style="width:200px; height: auto"></td>
                                            <td><img src="{{ asset('assets/img/installation.png') }}" alt="" style="width:200px; height: auto"></td>
                                            <td><img src="{{ asset('assets/img/optimization.png') }}" alt="" style="width:200px; height: auto"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-info">
                                <div class="table-responsive">
                                    <table>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><h3>Microwave Installation & Commissioning</h3></td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('assets/img/microwave.png') }}" alt="" style="width:150px; height: auto"></td>
                                            <td>&nbsp;&nbsp;</td>
                                            <td>
                                                <p style="font-size: 15px; color: black; text-align: justify">
                                                    As technology shifts and improves, carriers need to upgrade their equipment. Our team is not only familiar with all major carrier technologies,
                                                    but also experienced in microwave alignment and monitoring. We strive to make any equipment upgrade as streamlined as possible with little to no
                                                    carrier down time. We provide installation, testing & commissioning services for PDH & SDH equipment along with various sizes of antennas.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-info">
                                <div class="table-responsive">
                                    <table>
                                        <tr>
                                            <td><h3>Tower Infrastructure & CME Installation & Optimization (Remote Monitoring)</h3></td>
                                        </tr>
                                        <tr>
                                            <td width="80%">
                                                <p style="font-size: 15px; color: black; text-align: justify;">
                                                    AJE Best-On offer professional tower infra services to our clients to streamline their communication and data transmission process.
                                                    In addition, personal tower solutions have several benefits that companies aiming to expand must avail in today’s day and age. We also handle
                                                    project scopes for all sizes, whether it is constructing new telecommunications towers, reinforcing, or modifying existing towers, installing
                                                    lines and antennas, or performing maintenance on existing structures.
                                                </p>   
                                            </td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><img src="{{ asset('assets/img/ticme.png') }}" alt="" style="width:200px; height: auto"></td>
                                        </tr>
                                    </table>
                                </div>       
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-info">
                                <div class="table-responsive">
                                    <table>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><h3>Telecom Fibre Deployment</h3></td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('assets/img/fibre.png') }}" alt="" style="width:150px; height: auto"></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td>
                                                <p style="font-size: 15px; color: black; text-align: justify;">
                                                    We provide complete OSP services include installing aerial cable, direct-buried cable, underground cable in conduit, installing conduit and
                                                    pulling cable, micro trenching, HDD, cables through sewer, Splicing cables, fibre termination, utility pole replacement and OTDR testing.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-info">
                                <div class="table-responsive">
                                <h3>Telecom Equipment Installation </h3>
                                <p style="font-size: 15px; color: black; text-align: justify">
                                    We provide services to install, test & commissioning of rectifier, inverter, backup battery and base transceiver station (BTS).
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection