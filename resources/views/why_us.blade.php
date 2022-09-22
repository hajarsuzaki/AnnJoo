@extends('layouts.app')
@section('title')
    Why Choose Us
@endsection
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Why Choose Us?</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>Why Choose Us</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-12">
                    <div class="col-lg-6">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-header" style="text-align: center"><b>Green Renewable Energy</b></div>
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td>
                                            <p style="font-size: 20px"><i class="bx bx-leaf"></i></p>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <h6 style="text-align: justify">We offer a flexible, turnkey solutions and
                                                services that meet your individual project needs.</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="font-size: 20px"><i class="bx bx-leaf"></i></p>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <h6 style="text-align: justify">We offer the best overall value through advanced
                                                technology and system flexibility while backed by our experience, coverage
                                                and
                                                commitment to providing the highest level of support, quality, safety, and
                                                superior performance.</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;&nbsp;<br>&nbsp;&nbsp;<br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;<br><br>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-header" style="text-align: center"><b>Telecom Solutions</b></div>
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td>
                                            <p style="font-size: 20px"><i class="bx bx-broadcast"></i></p>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <h6 style="text-align: justify">We are supported by professional personnel and
                                                backed by strong management team with excellent experiences.</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="font-size: 20px"><i class="bx bx-broadcast"></i></p>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <h6 style="text-align: justify">Our range of services are continuously being
                                                expanded so that we can offer a complete package of site services covering
                                                all
                                                spectrum of communication industry whether it be a single product or a
                                                turnkey system.</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="font-size: 20px"><i class="bx bx-broadcast"></i></p>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <h6 style="text-align: justify">The service that we offer covers total turnkey
                                                communications management which includes infrastructure, engineering
                                                services and
                                                maintenance.</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="font-size: 20px"><i class="bx bx-broadcast"></i></p>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <h6 style="text-align: justify">Our company is presently dealing in tower
                                                upgrading, repairing and maintenance.</h6>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
