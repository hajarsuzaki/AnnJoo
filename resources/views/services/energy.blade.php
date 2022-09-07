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
                    <div class="portfolio-description">
                        {{-- <h2 style="text-align: center; color: green;">eNERGY One-Stop Solution</h2> --}}
                        {{-- <h6 style="text-align: center;">
                        A full set of technology independent research and development, from hardware design, software development, project consulting, technical services, senior 
                        software and hardware engineers, years of research and development experience, to provide you with one-stop solution!
                        </h6> --}}
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="telco_hybrid" data-bs-toggle="pill" data-bs-target="#telco_hybrid_solar" type="button" role="tab" aria-controls="telco_hybrid_solar" aria-selected="true">Telco Hybrid Solar Solutions</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="energy_storage_tab" data-bs-toggle="pill" data-bs-target="#energy_storage" type="button" role="tab" aria-controls="energy_storage" aria-selected="false">eNERGY Storage System</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="industrial_tab" data-bs-toggle="pill" data-bs-target="#industrial" type="button" role="tab" aria-controls="industrial" aria-selected="false">Enterprise/Industrial</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="residential_tab" data-bs-toggle="pill" data-bs-target="#residential" type="button" role="tab" aria-controls="residential" aria-selected="false">Residential/New Property</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="microgrid_tab" data-bs-toggle="pill" data-bs-target="#microgrid" type="button" role="tab" aria-controls="microgrid" aria-selected="false">Microgrid</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ipv_tab" data-bs-toggle="pill" data-bs-target="#ipv" type="button" role="tab" aria-controls="ipv" aria-selected="false">IPV LED</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ev_tab" data-bs-toggle="pill" data-bs-target="#ev" type="button" role="tab" aria-controls="ev" aria-selected="false">Electric Vehicle</button>
                                </li>
                              </ul>
                              <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="telco_hybrid_solar" role="tabpanel" aria-labelledby="telco_hybrid">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                          <table>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/img/aj_solar/aj_solar4.jpeg') }}" class="card-img-top" alt="{{ asset('assets/img/aj_solar/aj_solar4.jpeg') }}" style="width:; height: auto; text-align: center">
                                                </td>
                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                <td>
                                                    <h1 class="home-title">
                                                        <span style="text-align: center">Telco Hybrid Solar</span>
                                                        <span style="text-align: center">Solutions</span>
                                                      </h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="49%">
                                                    <p class="card-text" style="text-align: justify">There are more than 3 million telecom towers globally and powering them is a 
                                                    $100bn market. It’s a particularly important growth sector in developing countries. Telco providers are already using mobiles 
                                                    to leapfrog the laying of costly landlines, but because lack grids that stretch to remote communities, Telco providers need to power
                                                    towers that are off the grid. As solar and storage costs continue to drop, Telco providers are replacing diesel gensets as the preferred option.
                                                    <br><br>Powering telecom towers with renewables is a great opportunity – especially for towers in remote locations. Typically, these 
                                                    towers run on diesel gensets that require significant costs for operation and maintenance. The recent price decrease of solar 
                                                    and batteries allows at least for partially replacing diesel by renewable energy sources.</p>
                                                </td>
                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                <td width="49%"> 
                                                    <p class="card-text" style="text-align: justify">
                                                        AJE Best-On hybrid solutions for telecom sites are extremely rugged and built to adapt to your site needs. Our whole 
                                                        range of efficient energy systems are designed to support renewable energy sources and can be deployed virtually 
                                                        anywhere, including network edge and remote telecom sites off-grid and on-grid to help Telco Operators increase their 
                                                        operational savings.<br><br>
                                                        We are establishing our markets in the ASIA countries such Indonesia, Bangladesh, Nepal, Myanmar, Vietnam, Pakistan, Laos, Philippine, Sri Lanka and Thailand with regional Telco’s (Edotco).
                                                        <br><br><br><br>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="energy_storage" role="tabpanel" aria-labelledby="energy_storage_tab">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets/img/energy/ess.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/aj_solar/ess.jpg') }}" style="width:; height: auto; text-align: center">
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                    <td>
                                                        <h1 class="home-title">
                                                            <span style="text-align: center">eNERGY Storage System</span>
                                                        </h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="49%">
                                                        <p class="card-text" style="text-align: justify">Energy storage works by capturing electricity produced by both renewable and
                                                        non-renewable resources and storing it for discharge when required. The solution allows users to come off the grid and switch 
                                                        to stored electricity, at the most convenient time, giving greater flexibility and control of electrical usage.
                                                        <br><br>At times of unexpected increases in demand on the grid, energy storage can be used to discharge power back to the 
                                                        electrical supply network very quickly to provide additional supply to help meet demand. By businesses contributing to this 
                                                        process of balancing demand, it alleviates the pressure from the grid and for these assistance contracts are offered.</p>
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                    <td width="49%"> 
                                                        <p class="card-text" style="text-align: justify">
                                                            Driven by advances in technology, the traditional model of electricity provision is being replaced by a smart, flexible 
                                                            energy smart grid powered by energy storage, demand side response and inter-connectivity.<br><br>
                                                            eNERGY One-stop solution at grid level, energy storage reduces stress on the electrical network infrastructure, increases 
                                                            the proportion of renewable on the grid and increases reliability of renewable generation. It also provides efficient 
                                                            demand balancing options for the grid and reduces the need for backup demand generation.
                                                            <br><br>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="microgrid" role="tabpanel" aria-labelledby="microgrid_tab">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets/img/energy/microgrid2.png') }}" class="card-img-top" alt="{{ asset('assets/img/aj_solar/microgrid2.png') }}" style="width:; height: auto; text-align: center">
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                    <td>
                                                        <h1 class="home-title">
                                                            <span style="text-align: center">Microgrid</span>
                                                        </h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="49%">
                                                        <p class="card-text" style="text-align: justify">A microgrid is an energy dissemination network that depends on nearby methods for creating power. It is intended to work autonomously or in
                                                            synchronization with the public organization, inside a characterized territory. To empower disengaged or far off regions to make sure about their
                                                            financial movement and advantage from solid energy, it is important to guarantee the creation and dispersion of power. It is likewise an occasion
                                                            to benefit from clean circulated and environmentally friendly power.
                                                        <br></p>
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                    <td width="49%"> 
                                                        <p class="card-text" style="text-align: justify">
                                                            Microgrids are generally adjusted to domains with inadequate or insufficient force gracefully, for a moderate solid and neighbourhood energy.
                                                            The coordination of neighbourhood sustainable power creation and energy stockpiling empowers modern structure in secluded areas to restrict the
                                                            various results of a potential organization blackout. They are additionally an ideal decision for distant country regions.
                                                            <br><br>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="industrial" role="tabpanel" aria-labelledby="industrial_tab">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets/img/energy/industrial.png') }}" class="card-img-top" alt="{{ asset('assets/img/energy/industrial.png') }}" style="width:; height: auto; text-align: center">
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                    <td>
                                                        <h1 class="home-title">
                                                            <span style="text-align: center">Enterprise / Industrial</span>
                                                        </h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="49%" colspan="3">
                                                        <p class="card-text" style="text-align: justify">Solar Green eNERGY will reduce the carbon footprint in business operation and reduce your current working costs and give significant serenity
                                                            against rising electricity expenses and tap into the developing client base that search for naturally mindful merchants that are centered around
                                                            feasible exuberance methodologies.
                                                        <br></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="49%"> 
                                                        <p class="card-text" style="text-align: justify">
                                                            Government motivating forces joined with ongoing strength with sunlight-based gear costs make the interest in sun-oriented power a decent
                                                            investment related choice for organizations and expand business operations with one-time investment time cost for OPEX. An interest in sun-based
                                                            power can produce stable recompense with long term reserve funds.
                                                            <br><br>
                                                        </p>
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                    <td>
                                                        <img src="{{ asset('assets/img/energy/industrial_2.png') }}" class="card-img-top" alt="{{ asset('assets/img/energy/industrial_2.png') }}" style="width:; height: auto; text-align: center">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="residential" role="tabpanel" aria-labelledby="residential_tab">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets/img/energy/residential.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/energy/residential.jpg') }}" style="width:; height: auto; text-align: center">
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                    <td>
                                                        <h1 class="home-title">
                                                            <span style="text-align: center">Residential / New Property Development</span>
                                                        </h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="49%">
                                                        <p class="card-text" style="text-align: justify">Solar for residential - why pay more if you can generate and manage your own eNERGY storage system.
                                                            The most popular size solar power systems for an “average house” are up to 72kW. These systems can save up electricity bills significantly. The eNERGY solution will
                                                            be presented to you, will include installation in the local region for all the residential type. eNERGY serves various sizes of the ESS solutions to help consumers save on their
                                                            electricity bills.
                                                        <br><br><p>
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                    <td width="49%"> 
                                                        <p class="card-text" style="text-align: justify">
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
                                <div class="tab-pane fade" id="ipv" role="tabpanel" aria-labelledby="ipv_tab">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets/img/energy/ipv.png') }}" class="card-img-top" alt="{{ asset('assets/img/energy/ipv.png') }}" style="width:; height: auto; text-align: center">
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                    <td>
                                                        <h1 class="home-title">
                                                            <span style="text-align: center">IPV LED</span>
                                                        </h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="49%">
                                                        <p class="card-text" style="text-align: justify">Combining German and Japanese efficient lighting technology with green technology and you get double the sustainability factor. Innovation Performance
                                                            Versatility LED does just that. It provides the latest light emitting diode (LED) solutions with thermal technology to provide sustainable and versatile
                                                            lighting alternatives while reducing greenhouse gas emissions.
                                                            <br>
                                                            We are ready to start net zero carbon-home energy efficiency projects for all the new property development market and we will go for individual
                                                            programme to serve the demands.
                                                            <br>
                                                            It has high-performance bright lights that beat competitors. It’s a featherweight product, universal and is made up of interchangeable parts.
                                                            It’s customizable and has a modular technology, where a single body kit can be used for multiple applications.<br>
                                                            LED products save energy, but very few people have gone further to understand how much they will save from the total cost of energy used.
                                                        <p>
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                    <td width="49%"> 
                                                        {{-- <p class="card-text" style="text-align: justify">
                                                            It has high-performance bright lights that beat competitors. It’s a featherweight product, universal and is made up of interchangeable parts.
                                                            It’s customizable and has a modular technology, where a single body kit can be used for multiple applications.<br>
                                                            LED products save energy, but very few people have gone further to understand how much they will save from the total cost of energy used.
                                                            <br><br><br><br>
                                                        </p> --}}
                                                        <div class="portfolio-info">
                                                            <h5>Benefits that IPV LED offers besides saving costs:</h5>
                                                            <table>
                                                                <tr>
                                                                    <td><p style="font-size: 20px"><i class="bx bx-bulb"></i></p></td>
                                                                    <td>&nbsp;</td>
                                                                    <td><h6 style="text-align: justify">Better LED chips are brighter resulting in using less electrical power wattage.</h6></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><p style="font-size: 20px"><i class="bx bx-bulb"></i></p></td>
                                                                    <td>&nbsp;</td>
                                                                    <td><h6 style="text-align: justify">Good designs of 
                                                                    thermal solutions improve the life span of the products, thus last longer and reduce periodical maintenance 
                                                                    drastically.</h6></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><p style="font-size: 20px"><i class="bx bx-bulb"></i></p></td>
                                                                    <td>&nbsp;</td>
                                                                    <td><h6 style="text-align: justify">The impact of lightweight LED luminaires, especially in high power LED 
                                                                    applications such as streetlights, high mast, and stadium lighting, will have great savings over structural 
                                                                    costs using smaller poles or smaller structure due to its weight benefits.</h6></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><p style="font-size: 20px"><i class="bx bx-bulb"></i></p></td>
                                                                    <td>&nbsp;</td>
                                                                    <td><h6 style="text-align: justify">LED products complement the economy, by letting people spend less on 
                                                                    electricity bills and gives them extra money to spend in other areas. </h6></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ev" role="tabpanel" aria-labelledby="ev_tab">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td>&nbsp;&nbsp;&nbsp;</td>
                                                    <td>
                                                        <img src="{{ asset('assets/img/ev.png') }}" class="card-img-top" alt="{{ asset('assets/img/ev.png') }}" style="width: fit-content; height: auto; text-align: center">
                                                    </td>
                                                    <td>
                                                        <h1 class="home-title">
                                                            <span style="text-align: center">Electric Vehicle</span>
                                                        </h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <p class="card-text" style="text-align: justify">eNERGY intelligent power exchange platform is a smart energy ecosystem based on IoT software and hardware integration technology independently
                                                            developed and put into operation by Leading “Internet of Things Energy Sharing Service Platform”, reconstructing the traditional artificial charging
                                                            mode into an unattended automatic power-changing system and a zero-cost ladder utilization system, effectively reducing lithium battery pollution and
                                                            resource waste, achieving green travel and low carbon, environmental protection, energy saving goals.<br>
                                                            Realize the intelligentization, standardization and sharing of energy through the Internet of Things and the Internet of Vehicles technology to realize the intelligentization of urban distributed
                                                            energy.
                                                       <p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection