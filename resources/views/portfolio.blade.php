@extends('layouts.app')
@section('title')
    Portfolio
@endsection
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>Portfolio</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details-pr" class="portfolio-details-pr">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolio-info card border-primary mb-3" style="">
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
                                        <img src="assets/img/aj_solar/new_telco_2.jpg" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/aj_solar/new_telco_2.jpg"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                                    title=""><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/aj_solar/new_telco.jpg" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/aj_solar/new_telco_2.jpg"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                                    title=""><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/aj_solar/aj_solar11.jpeg" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/aj_solar/aj_solar11.jpeg"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                                    title=""><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/aj_solar/aj_solar2.jpeg" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/aj_solar/aj_solar2.jpeg"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                                    title=""><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/aj_solar/aj_solar3.jpeg" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/aj_solar/aj_solar3.jpeg"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                                    title=""><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/aj_solar/aj_solar4.jpeg" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/aj_solar/aj_solar4.jpeg"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                                    title=""><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/telco-1.jpg" class="img-fluid" alt=""
                                            style="width: 307px; height: auto">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/telco-1.jpg" data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                                                <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/telco-2.jpg" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/telco-2.jpg" data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                                                <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/telco-3.png" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/telco-3.png" data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                                                <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/telco-4.png" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/telco-4.png" data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                                                <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/aj_solar/aj_solar6.jpeg" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/aj_solar/aj_solar6.jpeg"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                                    title=""><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/aj_solar/aj_solar7.jpeg" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/aj_solar/aj_solar7.jpeg"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                                    title=""><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/aj_solar/aj_solar8.jpeg" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/aj_solar/aj_solar8.jpeg"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                                    title=""><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/aj_solar/aj_solar1.jpeg" class="img-fluid" alt=""
                                            style="width: 307px; height: 307px">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/aj_solar/aj_solar1.jpeg" data-gallery="portfolioGallery"
                                                    class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/aj_solar/aj_solar9.jpeg" class="img-fluid" alt=""
                                            style="width: 307px; height: auto">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/aj_solar/aj_solar9.jpeg"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                                    title=""><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                                    <div class="portfolio-wrap">
                                        <img src="assets/img/aj_solar/aj_solar10.jpeg" class="img-fluid" alt=""
                                            style="width: 307px; height: auto">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="assets/img/aj_solar/aj_solar10.jpeg"
                                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                                    title=""><i class="bx bx-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
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
