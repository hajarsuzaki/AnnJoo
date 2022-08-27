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
                    <li><a href="{{ route('welcome')}}">Home</a></li>
                    <li>About Us</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-12">
                <div class="col-lg-12">
                    <div class="portfolio-info">
                        <p style="font-size: 16px; color: black; text-align: justify;">
                            <b>AJE Best-On Sdn. Bhd.</b> known as “Ann Joo Energy” is the best technology in the domain by maximizing efficiency Green. Ann Joo Energy eNERGY ecosystems resilient 
                            is with eNERGY Storage System (ESS). Our key strength is to regenerate the energy from Green Technology such as solar, grid and the advantage of the 
                            complementary nature in profile of the green eNERGY sources.
                        </p><br>
                            <table>
                                <tr>
                                    <td><img src="assets/img/solar_panel.png" alt="" style="width: 200px; height: auto"></td>
                                    <td>&nbsp;&nbsp;</td>
                                    <td>
                                        <p style="font-size: 16px; color: black; text-align: justify;">
                                            Ann Joo Energy Technology ensures continuous and reliable power production. The Ann Joo Energy solution has capability to integrate with the hydrogen 
                                            Fuel-Cell in the future. “Ann Joo Energy converting of the sunlight into efficient electricity” Ann Joo Energy Generator with ESS guarantees maximum 
                                            eNERGY conversion efficiency up to zero tolerance from the total eNERGY solar radiation. Ann Joo Energy able to implement the eNERGY sources from 
                                            Biomass, Hydropower, Geothermal, Wind, and Solar able to standby eNERGY around the clock.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <table>
                                <tr>
                                    <td>
                                        <p style="font-size: 16px; color: black; text-align: justify;">
                                            Reducing utility costs doesn't have to be your chore, trust AJE to handle it all. Our goal is to protect the environment, save on utility bills and
                                            increase the value of your property. Through your partnership with AJE, we make the process of switching to solar become easy and affordable. 
                                            We specialize in designing and installing customized roof mount, ground mount, tracking and E2E solar systems to meet your unique requirements, 
                                            energy goals, and suitable location. It will be a massive energy saving with AJE (smart solar + minimum unit consumption from grid + energy complementary = 75% saving).<br><br>
                                            At minimum AJE ESS generate 10 times higher compared to conventional solar panel energy generation. 100% Power available of maximum load inverter capacity 
                                            and solid operation with module capacity level (Inverter capacity). Over 4000 cycles of battery life cycle by charging and discharging simultaneously.
                                            A parallel connection of basic modules enables single-phase and three-phase power supply. 70% automatic problem-preventive system with battery 
                                            DOD (Depth of Discharge) setting (Enable to restart after 5 ~ 10 minutes from insufficient to sufficient battery power level). Engine stops when the 
                                            vehicle stops and restarts when the vehicle starts (Inventers running only when loading). No heating or cooling systems required and low EMR
                                            (electromagnetic radiation) on solar cells, batteries, and inverter equipment. Easy operation with automatic design, very low parts replacement, and 
                                            low maintenance cost for use in independent power grid (easy to follow up power load). Reduced site requirement by 90% compared to the same power 
                                            generation with conventional Solar PV deployment, easy to install, and easy expansion.
                                        </p>
                                    </td>
                                    <td>
                                        <img src="assets/img/residential.jpg" alt="" style="width: 400px; height: auto">
                                    </td>
                                </tr>
                            </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection