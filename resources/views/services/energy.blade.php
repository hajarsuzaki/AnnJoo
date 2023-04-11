@extends('layouts.app')
@section('title')
Green Renewable Energy
@endsection
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Green Renewable Energy</h2>
                <ol>
                    <li><a href="{{ route('welcome')}}">Home</a></li>
                    <li>Green Renewable Energy</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details-gr" class="portfolio-details-gr">
        <div class="container">
            <div class="row gy-12">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-group">
                                <div class="card" style="background: linear-gradient(180deg, #5c9f24 -7.18%, #5c9f24 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/energy/microgrid.png') }}" class="card-img-top" alt="{{ asset('assets/img/energy/microgrid.png') }}" style="width:fit-content; height: 320px; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #161717">Solar Hybrid Solutions</h5>
                                        <p class="card-text" style="color: black; text-align: justify">
                                            Reason to invest in Solar Hybrid System for telecom tower:
                                            <ul>
                                                <li>Opportunity</li>
                                                <li>Cost reduction</li>
                                                <li>Sustainability in powering</li>
                                                <li>Flexibility in location</li>
                                            </ul>
                                        </p>    
                                    </div>
                                      <!-- Modal -->
                                     <div class="card-footer" style="background-color: #ACCFAC; text-align: center">
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#solar_hybrid">Read More</button>
                                    </div>
                                    <div class="modal fade" id="solar_hybrid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Solar Hybrid Solutions</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="card-text" style="text-align: justify">
                                                        Reason to invest in Solar Hybrid System for telecom tower:
                                                        <ul>
                                                            <li><b>Opportunity</b>: Competitive solar and batteries prices and transition into eco-friendly business.</li>
                                                            <li><b>Cost reduction</b>: Significant reduction in operation and maintenance cost as compared to user of diesel gensets.</li>
                                                            <li><b>Sustainability in powering</b>: Hassle free from powering the towers outside the grids that face lack of grids that stretch to remote communities using mobiles to leapfrog the laying of costly landlines.</li>
                                                            <li><b>Flexibility in location</b>: For telecom locations, AJE Best-On’s hybrid systems are incredibly durable and designed to change to meet your demands.</li>
                                                        </ul>
                                                        Our whole range of efficient energy systems are designed to support renewable energy sources and can be deployed virtually 
                                                        anywhere, including network edge and remote telecom sites off-grid and on-grid to help Telco Operators increase their 
                                                        operational savings.
                                                    </p>
                                                    <div class="row">
                                                        {{-- <div class="col-lg-12"> --}}
                                                            <div class="col-lg-12">
                                                                <table border=1 style="width:100%; border-collapse: collapse;">
                                                                    <thead>
                                                                    <tr style="border-bottom: 1px solid rgb(23, 22, 22); border-right: 1px solid rgb(23, 22, 22)">
                                                                        <th style="text-align: center; border-right: solid 1px rgb(23, 22, 22);" width="50%">SOLUTIONS</th>
                                                                        <th style="text-align: center">BUSINESS MODEL</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td style="border-right: solid 1px rgb(23, 22, 22);">
                                                                            <ul>
                                                                            <li>Solutions with Renewable Energy</li>
                                                                            <li>Solar Solution with high Energy Efﬁciency</li>
                                                                            <li>Backup Diesel Generator</li>
                                                                            </ul>
                                                                        </td>
                                                                        <td>
                                                                            <ul>
                                                                                <li>OPEX Model – Total Initial Investment of the project will be borne by AJE Best-On</li>
                                                                                <li>Solar Solution with high Energy Efﬁciency</li>
                                                                                <li>Backup Diesel Generator</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            {{-- <div class="col-lg-6">
                                                                <table border=1 style="width:100%; border-collapse: collapse;">
                                                                    <thead>
                                                                    <tr>
                                                                        <th style="text-align: center">BUSINESS MODEL</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <ul>
                                                                                <li>OPEX Model – Total Initial Investment of the project will be borne by AJE Best-On</li>
                                                                                <li>Solar Solution with high Energy Efﬁciency</li>
                                                                                <li>Backup Diesel Generator</li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div> --}}
                                                        {{-- </div> --}}
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #5c9f24 -7.18%, #5c9f24 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/energy/industrial_1.png') }}" class="card-img-top" alt="{{ asset('assets/img/energy/industrial_1.png') }}" style="width:fit-content; height: 320px; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #161717">Enterprise & Industrial Solar Hybrid System</h5>
                                        <p class="card-text" style="color: black; text-align: justify">
                                            Solar Green eNERGY will reduce the carbon footprint in business operation and reduce your current working costs and give significant serenity
                                            against rising electricity expenses and tap into the developing client base that search for naturally mindful merchants that are centered around
                                            feasible exuberance methodologies.
                                        </p>    
                                    </div>
                                    <div class="card-footer" style="background-color: #ACCFAC; text-align: center">
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#enterprise">Read More</button>
                                    </div>
                                    <div class="modal fade" id="enterprise" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Enterprise & Industrial Solar Hybrid System</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="card-text" style="text-align: justify">
                                                        <b><i>Enterprise</i></b><br>
                                                        The adoption of solar energy into your enterprise can improve environmental sustainability in your operations, 
                                                        and significantly reduce your business's carbon footprint while simultaneously minimizing current operating expenses.<br> 
                                                        Additionally, leveraging solar power can offer a sense of security against escalating electricity expenses. 
                                                        Furthermore, implementing sustainable energy strategies can help to expand your customer base by appealing to a 
                                                        growing demographic of eco-conscious consumers who seeking out for environmentally responsible businesses. 
                                                    </p>
                                                    <p class="card-text" style="text-align: justify">
                                                        <b><i>Industrial</i></b><br>
                                                        Incorporating solar energy into a company's operations can be a sound investment decision that offers long-term 
                                                        benefits. This one-time investment in operational expenses can be offset by government incentives and ongoing cost 
                                                        reductions in solar equipment. Furthermore, this investment can provide stable returns over time and contribute to 
                                                        long-term savings.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #5c9f24 -7.18%, #5c9f24 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/energy/server_room.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/energy/server_room.jpg') }}" style="width:fit-content; height: 320px; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #161717">Microgrid</h5>
                                        <p class="card-text" style="color: black; text-align: justify">
                                            A microgrid is an electricity dissemination network that relies on local power generation techniques. 
                                            It is intended to operate autonomously or in synchronization with the public organization, inside a characterized
                                            territory. 
                                        </p>    
                                    </div>
                                    <div class="card-footer" style="background-color: #ACCFAC; text-align: center">
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#microgrid">Read More</button>
                                    </div>
                                    <div class="modal fade" id="microgrid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Microgrid</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="card-text" style="text-align: justify">
                                                        A microgrid is an electricity dissemination network that relies on local power generation techniques. 
                                                        It is intended to operate autonomously or in synchronization with the public organization, inside a characterized
                                                        territory. 
                                                    </p>
                                                    <p class="card-text" style="text-align: justify">
                                                        It is crucial to ensure the production and distribution of power in order to empower disengaged or far off regions to ensure their financial movement and 
                                                        advantage from solid energy. Also, it is likewise an occasion to benefit from clean circulated and environmentally friendly power.
                                                    </p>
                                                    <p class="card-text" style="text-align: justify">
                                                        Microgrids typically adapt gracefully to areas with inadequate or insufficient power, for a moderate solid and neighbourhood energy.
                                                    </p>
                                                    <p class="card-text" style="text-align: justify">
                                                        The coordination of neighbourhood sustainable power generation and energy storage enables modern structure in 
                                                        remote locations to limit the varied effects of a potential organization blackout.
                                                    </p>
                                                    <p class="card-text" style="text-align: justify">
                                                        On account of microgrids, secluded areas could be provided by crossover frameworks, utilizing sun powered photovoltaic
                                                        frameworks or other sustainable power source, stockpiling batteries, and generators.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #5c9f24 -7.18%, #5c9f24 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/energy/ipv.png') }}" class="card-img-top" alt="{{ asset('assets/img/energy/ipv.png') }}" style="width:fit-content; height: 320px; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #161717">Renewable Energy Solutions</h5>
                                        <p class="card-text" style="color: black; text-align: justify">
                                        </p>    
                                    </div>
                                    <div class="card-footer" style="background-color: #ACCFAC; text-align: center">
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#renewable">Read More</button>
                                    </div>
                                    <div class="modal fade" id="renewable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Renewable Energy Solutions</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="card-text" style="text-align: justify">
                                                       
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection