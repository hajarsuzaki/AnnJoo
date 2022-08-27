@extends('layouts.app')
@section('title')
eNERGY Storage System
@endsection
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>eNERGY Storage System</h2>
                <ol>
                    <li><a href="{{ route('welcome')}}">Home</a></li>
                    <li>eNERGY Storage System</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details-gr" class="portfolio-details-gr">
        <div class="container">
            <div class="row gy-12">
                <div class="col-lg-12">
                    <div class="portfolio-description">
                        <h2 style="text-align: center; color: green;">eNERGY One-Stop Solution</h2>
                        <h6 style="text-align: center;">
                        A full set of technology independent research and development, from hardware design, software development, project consulting, technical services, senior 
                        software and hardware engineers, years of research and development experience, to provide you with one-stop solution!
                        </h6>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-info">
                                <div class="table-responsive">
                                    <table>
                                        <tr>
                                            <td><h3>Residential & New Property Development</h3></td>
                                        </tr>
                                        <tr>
                                            <td width="65%">
                                                <p style="font-size: 15px; color: black; text-align: justify">
                                                    Solar for residential - why pay more if you can generate and manage your own eNERGY storage system.
                                                    The most popular size solar power systems for an “average house” are up to 72kW. These systems can save up electricity bills significantly. The eNERGY solution will
                                                    be presented to you, will include installation in the local region for all the residential type. eNERGY serves various sizes of the ESS solutions to help consumers save on their
                                                    electricity bills.
                                                </p>
                                            </td>
                                            <td>&nbsp;&nbsp;</td>
                                            <td><img src="{{ asset('assets/img/residential_2.png') }}" alt="" style="width:200px; height: auto"></td>
                                            <td rowspan="2">
                                                <img src="{{ asset('assets/img/residential_1.png') }}" alt="" style="width:200px; height: auto">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="font-size: 15px; color: black; text-align: justify">
                                                    We are ready to start net zero carbon-home energy efficiency projects for all the new property development market and we will go for individual
                                                    programme to serve the demands. <br>
                                                    As in every country where Green Energy is active, the development costs for the first projects of this kind are
                                                    relatively high. Therefore funding is the key to help solution providers innovate and and support housing companies to establish new processes and
                                                    develop projects for procurement. Let us lead the industry to get the ball rolling with optimal cost.
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
                                            <td></td>
                                            <td><h3>Industrial & Enterprise</h3></td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('assets/img/industrial.png') }}" alt="" style="width:250px; height: auto"></td>
                                            <td width="75%">
                                                <p style="font-size: 15px; color: black; text-align: justify">
                                                    Solar Green eNERGY will reduce the carbon footprint in business operation and reduce your current working costs and give significant serenity
                                                    against rising electricity expenses and tap into the developing client base that search for naturally mindful merchants that are centered around
                                                    feasible exuberance methodologies. <br>
                                                    Government / motivating forces joined with ongoing strength with sunlight-based gear costs make the interest in sun-oriented / power a decent
                                                    investment related choice for organizations / and expand business operations with one-time investment time cost for OPEX. An interest / in sun-based
                                                    power / can produce / stable recompense / with long term reserve funds.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><br />
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-info">
                                <div class="table-responsive">
                                    <table>
                                        <tr>
                                            <td><h3>Microgrid</h3></td>
                                        </tr>
                                        <tr>
                                            <td width="75%">
                                                <p style="font-size: 15px; color: black; text-align: justify">
                                                    A microgrid is an energy dissemination network that depends on nearby methods for creating power. It is intended to work autonomously or in
                                                    synchronization with the public organization, inside a characterized territory. To empower disengaged or far off regions to make sure about their
                                                    financial movement and advantage from solid energy, it is important to guarantee the creation and dispersion of power. It is likewise an occasion
                                                    to benefit from clean circulated and environmentally friendly power.<br>
                                                    Microgrids are generally adjusted to domains with inadequate or insufficient force gracefully, for a moderate solid and neighbourhood energy.
                                                    The coordination of neighbourhood sustainable power creation and energy stockpiling empowers modern structure in secluded areas to restrict the
                                                    various results of a potential organization blackout. They are additionally an ideal decision for distant country regions.
                                                </p>
                                            </td>
                                            <td>&nbsp;&nbsp;</td>
                                            <td><img src="{{ asset('assets/img/microgrid.png') }}" alt="" style="width:250px; height: auto"></td>
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
                                            <td><h3>Electric Vehicle</h3></td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('assets/img/ev.png') }}" alt="" style="width:200px; height: auto"></td>
                                            <td>&nbsp;&nbsp;</td>
                                            <td>
                                                <p style="font-size: 15px; color: black; text-align: justify">
                                                    eNERGY intelligent power exchange platform is a smart energy ecosystem based on IoT software and hardware integration technology independently
                                                    developed and put into operation by Leading “Internet of Things Energy Sharing Service Platform”, reconstructing the traditional artificial charging
                                                    mode into an unattended automatic power-changing system and a zero-cost ladder utilization system, effectively reducing lithium battery pollution and
                                                    resource waste, achieving green travel and low Carbon, environmental protection, energy saving goals. Realize the intelligentization, standardization
                                                    and sharing of energy through the Internet of Things and the Internet of Vehicles technology to realize the intelligentization of urban distributed
                                                    energy.
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
                                <h3>IPV LED</h3>
                                <p style="font-size: 15px; color: black; text-align: justify">
                                        Combining German and Japanese efficient lighting technology with green technology and you get double the sustainability factor. Innovation Performance
                                        Versatility LED does just that. It provides the latest light emitting diode (LED) solutions with thermal technology to provide sustainable and versatile
                                        lighting alternatives while reducing greenhouse gas emissions.<br>
                                        It has high-performance bright lights that beat competitors. It’s a featherweight product, universal and is made up of interchangeable parts.
                                        It’s customizable and has a modular technology, where a single body kit can be used for multiple applications.<br>
                                        LED products save energy, but very few people have gone further to understand how much they will save from the total cost of energy used.

                                </p>
                            </div>
                        </div>
                    </div><
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection