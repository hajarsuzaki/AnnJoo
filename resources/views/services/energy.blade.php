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
                                        <img src="{{ asset('assets/img/energy/microgrid.png') }}" class="card-img-top" alt="{{ asset('assets/img/energy/microgrid.png') }}" style="width:fit-content; height: auto; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #161717">Telco Hybrid Solar Solutions & eNERGY Storage System</h5>
                                        <p class="card-text" style="color: black; text-align: justify">
                                            There are more than 3 million telecom towers globally and powering them is a 
                                            $100bn market. It’s a particularly important growth sector in developing countries. Telco providers are already using mobiles 
                                            to leapfrog the laying of costly landlines, but because lack grids that stretch to remote communities, Telco providers need to power
                                            towers that are off the grid. As solar and storage costs continue to drop, Telco providers are replacing diesel gensets as the preferred option.
                                        </p>    
                                    </div>
                                    <div class="card-footer" style="background-color: #ACCFAC; text-align: center">
                                        <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-light">Read More</button>
                                    </div>
                                    <div id="id01" class="w3-modal">
                                        <div class="w3-modal-content" style="">
                                          <div class="w3-container">
                                            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright"><p style="font-size: 20px"><i class="bx bx-x-circle"></i></p></span>
                                            <br><br>
                                            <div class="row">
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-8">
                                                    <div class="card text-white bg-secondary mb-3">
                                                        <div class="card-body">
                                                        <p class="card-text" style="text-align: center">Telco Hybrid Solar Solutions & eNERGY Storage System</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                               <table>
                                                    <tr>
                                                        <td width="50%" style="text-align: center"><b>Telco Hybrid Solar Solutions</b></td>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <td width="50%" style="text-align: center"><b>eNERGY Storage System</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p class="card-text" style="text-align: justify">There are more than 3 million telecom towers globally and powering them is a 
                                                                $100bn market. It’s a particularly important growth sector in developing countries. Telco providers are already using mobiles 
                                                                to leapfrog the laying of costly landlines, but because lack grids that stretch to remote communities, Telco providers need to power
                                                                towers that are off the grid. As solar and storage costs continue to drop, Telco providers are replacing diesel gensets as the preferred option.
                                                                <br><br>Powering telecom towers with renewables is a great opportunity – especially for towers in remote locations. Typically, these 
                                                                towers run on diesel gensets that require significant costs for operation and maintenance. The recent price decrease of solar 
                                                                and batteries allows at least for partially replacing diesel by renewable energy sources.</p>
                                                                <p class="card-text" style="text-align: justify">
                                                                AJE Best-On hybrid solutions for telecom sites are extremely rugged and built to adapt to your site needs. Our whole 
                                                                range of efficient energy systems are designed to support renewable energy sources and can be deployed virtually 
                                                                anywhere, including network edge and remote telecom sites off-grid and on-grid to help Telco Operators increase their 
                                                                operational savings.<br><br>
                                                                We are establishing our markets in the ASIA countries such Indonesia, Bangladesh, Nepal, Myanmar, Vietnam, Pakistan, Laos, Philippine, Sri Lanka and Thailand with regional Telco’s (Edotco).
                                                            </p>
                                                        </td>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <td>
                                                            <p class="card-text" style="text-align: justify">Energy storage works by capturing electricity produced by both renewable and
                                                                non-renewable resources and storing it for discharge when required. The solution allows users to come off the grid and switch 
                                                                to stored electricity, at the most convenient time, giving greater flexibility and control of electrical usage.
                                                                <br><br>At times of unexpected increases in demand on the grid, energy storage can be used to discharge power back to the 
                                                                electrical supply network very quickly to provide additional supply to help meet demand. By businesses contributing to this 
                                                                process of balancing demand, it alleviates the pressure from the grid and for these assistance contracts are offered.</p>
                                                                <p class="card-text" style="text-align: justify">
                                                                    Driven by advances in technology, the traditional model of electricity provision is being replaced by a smart, flexible 
                                                                    energy smart grid powered by energy storage, demand side response and inter-connectivity.<br><br>
                                                                    eNERGY One-stop solution at grid level, energy storage reduces stress on the electrical network infrastructure, increases 
                                                                    the proportion of renewable on the grid and increases reliability of renewable generation. It also provides efficient 
                                                                    demand balancing options for the grid and reduces the need for backup demand generation.
                                                                    <br><br><br><br><br>
                                                                </p>
                                                        </td>
                                                    </tr>
                                               </table>
                                               <br>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #5c9f24 -7.18%, #5c9f24 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/energy/industrial_1.png') }}" class="card-img-top" alt="{{ asset('assets/img/energy/industrial_1.png') }}" style="width:fit-content; height: 320px; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #161717">Enterprise & Industrial</h5>
                                        <p class="card-text" style="color: black; text-align: justify">
                                            Solar Green eNERGY will reduce the carbon footprint in business operation and reduce your current working costs and give significant serenity
                                            against rising electricity expenses and tap into the developing client base that search for naturally mindful merchants that are centered around
                                            feasible exuberance methodologies.
                                        </p>    
                                    </div>
                                    <div class="card-footer" style="background-color: #ACCFAC; text-align: center">
                                        <button onclick="document.getElementById('id02').style.display='block'" class="btn btn-light">Read More</button>
                                    </div>
                                    <div id="id02" class="w3-modal">
                                        <div class="w3-modal-content" style="">
                                          <div class="w3-container">
                                            <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright"><p style="font-size: 20px"><i class="bx bx-x-circle"></i></p></span>
                                            <br><br> 
                                            <div class="row">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <div class="card text-white bg-secondary mb-3">
                                                        <div class="card-body">
                                                        <p class="card-text" style="text-align: center">Enterprise & Industrial</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>
                                               <table>
                                                    <tr>
                                                        <td>
                                                            <p class="card-text" style="text-align: justify">Solar Green eNERGY will reduce the carbon footprint in business operation and reduce your current working costs and give significant serenity
                                                                against rising electricity expenses and tap into the developing client base that search for naturally mindful merchants that are centered around
                                                                feasible exuberance methodologies.
                                                            </p>
                                                            <p class="card-text" style="text-align: justify">Government motivating forces joined with ongoing strength with sunlight-based gear costs make the interest in sun-oriented power a decent
                                                                investment related choice for organizations and expand business operations with one-time investment time cost for OPEX. An interest in sun-based
                                                                power can produce stable recompense with long term reserve funds.
                                                            </p>
                                                        </td>
                                                    </tr>
                                               </table>
                                            <br>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #5c9f24 -7.18%, #5c9f24 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/energy/residential.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/energy/residential.jpg') }}" style="width:fit-content; height: 320px; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #161717">Residential & New Property Development</h5>
                                        <p class="card-text" style="color: black; text-align: justify">
                                            Solar for residential - why pay more if you can generate and manage your own eNERGY storage system.
                                            The most popular size solar power systems for an “average house” are up to 72kW. These systems can save up electricity bills significantly. The eNERGY solution will
                                            be presented to you, will include installation in the local region for all the residential type. eNERGY serves various sizes of the ESS solutions to help consumers save on their
                                            electricity bills.
                                        </p>    
                                    </div>
                                    <div class="card-footer" style="background-color: #ACCFAC; text-align: center">
                                        <button onclick="document.getElementById('id03').style.display='block'" class="btn btn-light">Read More</button>
                                    </div>
                                    <div id="id03" class="w3-modal">
                                        <div class="w3-modal-content" style="">
                                          <div class="w3-container">
                                            <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-display-topright"><p style="font-size: 20px"><i class="bx bx-x-circle"></i></p></span>
                                            <br><br>
                                            <div class="row">
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-8">
                                                    <div class="card text-white bg-secondary mb-3">
                                                        <div class="card-body">
                                                        <p class="card-text" style="text-align: center">Residential & New Property Development</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                               <h4></h4>
                                               <table>
                                                    <tr>
                                                        <td>
                                                            <p class="card-text" style="text-align: justify">Solar for residential - why pay more if you can generate and manage your own eNERGY storage system.
                                                                The most popular size solar power systems for an “average house” are up to 72kW. These systems can save up electricity bills significantly. The eNERGY solution will
                                                                be presented to you, will include installation in the local region for all the residential type. eNERGY serves various sizes of the ESS solutions to help consumers save on their
                                                                electricity bills.
                                                            </p>
                                                            <p class="card-text" style="text-align: justify">We are ready to start net zero carbon-home energy efficiency projects for all the new property development market and we will go for individual
                                                                programme to serve the demands. <br><br>
                                                                As in every country where Green Energy is active, the development costs for the first projects of this kind are
                                                                relatively high. Therefore funding is the key to help solution providers innovate and and support housing companies to establish new processes and
                                                                develop projects for procurement. Let us lead the industry to get the ball rolling with optimal cost.
                                                            </p>
                                                        </td>
                                                    </tr>
                                               </table>
                                            <br>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-group">
                                <div class="card" style="background: linear-gradient(180deg, #5c9f24 -7.18%, #5c9f24 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/energy/server_room.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/energy/server_room.jpg') }}" style="width:fit-content; height: 320px;; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #161717">Microgrid</h5>
                                        <p class="card-text" style="color: black; text-align: justify">
                                            A microgrid is an energy dissemination network that depends on nearby methods for creating power. It is intended to work autonomously or in
                                            synchronization with the public organization, inside a characterized territory. To empower disengaged or far off regions to make sure about their
                                            financial movement and advantage from solid energy, it is important to guarantee the creation and dispersion of power. It is likewise an occasion
                                            to benefit from clean circulated and environmentally friendly power.
                                        </p>    
                                    </div>
                                    <div class="card-footer" style="background-color: #ACCFAC; text-align: center">
                                        <button onclick="document.getElementById('id04').style.display='block'" class="btn btn-light">Read More</button>
                                    </div>
                                    <div id="id04" class="w3-modal">
                                        <div class="w3-modal-content" style="">
                                          <div class="w3-container">
                                            <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-display-topright"><p style="font-size: 20px"><i class="bx bx-x-circle"></i></p></span>
                                            <br><br> 
                                            <div class="row">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <div class="card text-white bg-secondary mb-3">
                                                        <div class="card-body">
                                                        <p class="card-text" style="text-align: center">Microgrid</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>
                                               <table>
                                                    <tr>
                                                        <td>
                                                            <p class="card-text" style="text-align: justify"><p class="card-text" style="text-align: justify">A microgrid is an energy dissemination network that depends on nearby methods for creating power. It is intended to work autonomously or in
                                                                synchronization with the public organization, inside a characterized territory. To empower disengaged or far off regions to make sure about their
                                                                financial movement and advantage from solid energy, it is important to guarantee the creation and dispersion of power. It is likewise an occasion
                                                                to benefit from clean circulated and environmentally friendly power.
                                                            <br><br>
                                                            Microgrids are generally adjusted to domains with inadequate or insufficient force gracefully, for a moderate solid and neighbourhood energy.
                                                            The coordination of neighbourhood sustainable power creation and energy stockpiling empowers modern structure in secluded areas to restrict the
                                                            various results of a potential organization blackout. They are additionally an ideal decision for distant country regions.
                                                            </p>
                                                        </td>
                                                    </tr>
                                               </table>
                                               <br>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #5c9f24 -7.18%, #5c9f24 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/energy/ipv.png') }}" class="card-img-top" alt="{{ asset('assets/img/energy/ipv.png') }}" style="width:fit-content; height: auto; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #161717">IPV LED</h5>
                                        <p class="card-text" style="color: black; text-align: justify">
                                            Combining German and Japanese efficient lighting technology with green technology and you get double the sustainability factor. Innovation Performance
                                            Versatility LED does just that. It provides the latest light emitting diode (LED) solutions with thermal technology to provide sustainable and versatile
                                            lighting alternatives while reducing greenhouse gas emissions.
                                            We are ready to start net zero carbon-home energy efficiency projects for all the new property development market and we will go for individual
                                            programme to serve the demands.
                                        </p>    
                                    </div>
                                    <div class="card-footer" style="background-color: #ACCFAC; text-align: center">
                                        <button onclick="document.getElementById('id05').style.display='block'" class="btn btn-light">Read More</button>
                                    </div>
                                    <div id="id05" class="w3-modal">
                                        <div class="w3-modal-content" style="">
                                          <div class="w3-container">
                                            <span onclick="document.getElementById('id05').style.display='none'" class="w3-button w3-display-topright"><p style="font-size: 20px"><i class="bx bx-x-circle"></i></p></span>
                                            <br><br>
                                            <div class="row">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <div class="card text-white bg-secondary mb-3">
                                                        <div class="card-body">
                                                        <p class="card-text" style="text-align: center">IPV LED</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>
                                               <table>
                                                    <tr>
                                                        <td>
                                                            <p class="card-text" style="text-align: justify">Combining German and Japanese efficient lighting technology with green technology and you get double the sustainability factor. Innovation Performance
                                                                Versatility LED does just that. It provides the latest light emitting diode (LED) solutions with thermal technology to provide sustainable and versatile
                                                                lighting alternatives while reducing greenhouse gas emissions.
                                                                <br><br>
                                                                We are ready to start net zero carbon-home energy efficiency projects for all the new property development market and we will go for individual
                                                                programme to serve the demands.
                                                                <br><br>
                                                                It has high-performance bright lights that beat competitors. It’s a featherweight product, universal and is made up of interchangeable parts.
                                                                It’s customizable and has a modular technology, where a single body kit can be used for multiple applications.<br><br>
                                                                LED products save energy, but very few people have gone further to understand how much they will save from the total cost of energy used.
                                                                <br><br>
                                                                <div class="card border-success mb-3">
                                                                    <div class="card-header">Benefits that IPV LED offers besides saving costs:</div>
                                                                    <div class="card-body text-success">
                                                                        <table>
                                                                            <tr>
                                                                                <td><p class="card-text"><span style="font-size: 20px"><i class="bx bx-bulb"></i></span> 
                                                                                    Better LED chips are brighter resulting in using less electrical power wattage.</p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><p class="card-text"><span style="font-size: 20px"><i class="bx bx-bulb"></i></span> 
                                                                                    Good designs of thermal solutions improve the life span of the products, thus last longer and reduce periodical maintenance 
                                                                                    drastically.</p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><p class="card-text"><span style="font-size: 20px"><i class="bx bx-bulb"></i></span> 
                                                                                    The impact of lightweight LED luminaires, especially in high power LED 
                                                                                    applications such as streetlights, high mast, and stadium lighting, will have great savings over structural 
                                                                                    costs using smaller poles or smaller structure due to its weight benefits.</p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><p class="card-text"><span style="font-size: 20px"><i class="bx bx-bulb"></i></span> 
                                                                                    LED products complement the economy, by letting people spend less on 
                                                                                    electricity bills and gives them extra money to spend in other areas.</p>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                  </div>
                                                            </p>
                                                        </td>
                                                    </tr>
                                               </table>
                                               <br>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <div class="card" style="background: linear-gradient(180deg, #5c9f24 -7.18%, #5c9f24 56.71%, #DCEEFA 107.18%);">
                                    <div class="row">
                                        <img src="{{ asset('assets/img/energy/electric_vehicle.jpg') }}" class="card-img-top" alt="{{ asset('assets/img/energy/electric_vehicle.jpg') }}" style="width:fit-content; height: 320px; ">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #161717">Electric Vehicle</h5>
                                        <p class="card-text" style="color: black; text-align: justify">
                                            eNERGY intelligent power exchange platform is a smart energy ecosystem based on IoT software and hardware integration technology independently
                                            developed and put into operation by Leading “Internet of Things Energy Sharing Service Platform”, reconstructing the traditional artificial charging
                                            mode into an unattended automatic power-changing system and a zero-cost ladder utilization system, effectively reducing lithium battery pollution and
                                            resource waste, achieving green travel and low carbon, environmental protection, energy saving goals.
                                        </p>    
                                    </div>
                                    <div class="card-footer" style="background-color: #ACCFAC; text-align: center">
                                        <button onclick="document.getElementById('id06').style.display='block'" class="btn btn-light">Read More</button>
                                    </div>
                                    <div id="id06" class="w3-modal">
                                        <div class="w3-modal-content" style="">
                                          <div class="w3-container">
                                            <span onclick="document.getElementById('id06').style.display='none'" class="w3-button w3-display-topright"><p style="font-size: 20px"><i class="bx bx-x-circle"></i></p></span>
                                            <br><br>
                                            <div class="row">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <div class="card text-white bg-secondary mb-3">
                                                        <div class="card-body">
                                                        <p class="card-text" style="text-align: center">Electric Vehicle</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>
                                               <table>
                                                    <tr>
                                                        <td>
                                                            <p class="card-text" style="text-align: justify">eNERGY intelligent power exchange platform is a smart energy ecosystem based on IoT software and hardware integration technology independently
                                                                developed and put into operation by Leading “Internet of Things Energy Sharing Service Platform”, reconstructing the traditional artificial charging
                                                                mode into an unattended automatic power-changing system and a zero-cost ladder utilization system, effectively reducing lithium battery pollution and
                                                                resource waste, achieving green travel and low carbon, environmental protection, energy saving goals.<br><br>
                                                                Realize the intelligentization, standardization and sharing of energy through the Internet of Things and the Internet of Vehicles technology to realize the intelligentization of urban distributed
                                                                energy.<br><br>
                                                            </p>
                                                        </td>
                                                    </tr>
                                               </table>
                                               <br>
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
@section('js')
<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
<script>
@endsection