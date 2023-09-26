<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  <script src="Js/index.js"></script>
</head>

<body>

  <section class="video-container">
  <nav class="navbar fixed-top navbar-expand-lg " id="nav">
      <div class="container-fluid nav-main-cont">
        <a class="navbar-brand" href="index.php"> <img src="images/LOGO.png" alt="Logo" class="d-inline-block nv-logo align-text-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div style="background-color: rgb(36, 34, 34);" class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
            <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
         
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
              <li class="nav-item nav-item1 nav-item2">
                <a class="nav-link" href="index.php"  aria-current="page">
                  HOME
                </a>
              </li>
              <li class="nav-item nav-item1 nav-item2 dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PRODUCT
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="Polymers (Flocculants & Coagulants).php">Polymers (Flocculants & Coagulants) used for wastewater treatment </a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Biological Bioaugmentation products.php">Biological Bioaugmentation products</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Chemicals for RO Plant.php">Chemicals for RO Plant </a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Speciality products used in pulp & paper industries.php">Speciality products used in pulp & paper industries</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Chemicals used in food and beverages industries.php">Chemicals used in food and beverages industries</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Chemicals used to improve the Dissolved Oxygen (DO) in wastewater.php">Chemicals used to improve the Dissolved Oxygen (DO) in wastewater</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Cleaning chemicals.php">Cleaning chemicals </a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Operational training, support and maintenance.php">Operational training, support and maintenance</a></li>
                </ul>
              </li>
              <li class="nav-item nav-item1 nav-item2 dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  INDUSTRIES
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="Odour Control.php">Odour Control</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Food & Beverages.php">Food & Beverages</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Dairy Industries.php">Dairy Industries</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Textile.php">Textile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Metal Processing.php">Metal Processing</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Pulp & Paper Industries.php">Pulp & Paper Industries</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Wood processing.php">Wood processing </a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Wastewater produced in Live stock exchange, abattoir, hide & skin treatment.php">Wastewater produced in Live stock exchange, abattoir, hide & skin treatment</a></li>
                </ul>
              </li>
              <li class="nav-item nav-item1 nav-item2 dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  TECHNICAL SERVICES
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="Trade waste auditing.php">Trade waste auditing</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Wastewater & soil testing.php">Wastewater & soil testing</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Process optimisation studies.php">Process optimisation studies</a></li>
                </ul>
              </li>
              <li class="nav-item nav-item1 nav-item2">
                <a class="nav-link" href="#" aria-current="page">
                  ORDER CONTROL
                </a>
              </li>
              <li class="nav-item nav-item1 nav-item2 dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  EQUIPMENTS
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="Diffused Air Flotation units (DAF).php">Diffused Air Flotation units (DAF)</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Specifically designed aeration system.php">Specifically designed aeration system</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Chemicals dosing Pumps.php">Chemicals dosing Pumps</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Specifically designed dosing system for MacroBoost products.php">Specifically designed dosing system for MacroBoost products</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Filter Press.php">Filter Press</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Mixer & inline static mixers.php">Mixer & inline static mixers</a></li>
                </ul>
              </li>
              <li class="nav-item nav-item1 nav-item2">
                <a class="nav-link " href="contact.php" aria-current="page">
                  CONTACT
                </a>
              </li>
            </ul>
            <a href="contact.php" class="navquoyebtn naav-btn rounded-pill">GET A QUOTE</a>
          </div>
        </div>
      </div>
    </nav>
    <video src="Background Video/Background Video 1.mp4" autoplay loop playsinline muted></video>
    <div class="callout">
      <h1 class="text-light sub-callout">Speciality products used in <br> pulp & paper industries</h1>
      
    </div>
  </section>
  <div class="" id="sub-about">
    <div style="padding: 150px 12px;" class="container">
    <h1 class="mb-5">Overview</h1>
    <p>Papermaking is an advanced process involving multiple processing steps to transform wood into paper products. In addition to the actual papermaking process, there are other areas that benefit from online analytical measurements, such as wastewater treatment, recovery boiler operation, steam generation and cooling towers. <br> <br>
        In the pulp and paper industry, great efforts are being made to conserve water, close the water cycle and significantly reduce the environmental impact through process modeling and renal technology as internal process water treatment. <br> <br>
        Wastewater from pulp and paper mills contains solids and dissolved material. The main methods of removing solids from pulp and paper mill effluents are sieving, sedimentation/clarification, and flotation. The method chosen depends on the characteristics of the solids to be removed and the purity requirements  of the treated water. <br> <br>
        Solids are separated from the wastewater using rakes, grid chambers and settling tanks. A screen is an assembly that works according to a screening/filtration process. The function of the rake is to remove coarse, bulky and fibrous components from the wastewater. Grit separation systems in current use can be divided into vertical grit chambers, circular grit chambers, and fluidized grit chambers, depending on  design and process control. Various wastewater treatment systems are used in the paper industry. Which process combination is preferred in each individual case depends on the quality-specific quality of the wastewater to be treated. <br> <br>
        </p>
    <p>
       <h5> Sedimentation technology:</h5> <br>
 Sedimentation  is the simplest and most economical method of separating solids from  liquid phases. A high level of efficiency is achieved in subsequent wastewater treatment processes when the solids suspended in the wastewater are settled as completely as possible in the settling tank and the settled sludge is removed from the settling tank. Sedimentation plants with a set of laminar passages are used in the paper industry, especially for wastewater with a high fiber concentration.<br> <br>
 <h5>Biological treatment :</h5><br>
 Biological wastewater treatment is used to break down dissolved contaminants in wastewater through the action of microorganisms. Microorganisms use these substances to live and reproduce.  Pollutants are used as nutrients. However, a prerequisite for such degradation activity is that the contaminants are water-soluble and non-toxic. <br> <br>
 <h5>Anaerobic technology:</h5> <br>
 Since the early 1980s, anaerobic treatment of industrial wastewater has been widely used in the pulp and paper industry. Hundreds of plants treat wastewater from a  variety of different pulp and paper mills.
Anaerobic treatment is most commonly used for effluents  from waste paper mills, especially in the manufacture of containerboard. In addition, it can process mechanical pulp (bleached with peroxide), semi-chemical pulp, and effluent from sulfite and kraft evaporator condensate. <br> <br>
<h5>Aerobic techniques:</h5> <br> 
Aerobic microorganisms require oxygen to support their metabolic activity. In wastewater treatment, oxygen is added to the wastewater in the form of air using special aeration equipment. Aerobic treatment enables complete biodegradation of paper mill wastewater. Systems that are operated aerobically have higher system stability and are less susceptible to variations in process and system parameters. After clarification:
Secondary clarification is for separating the biomass (activated sludge) produced in the bioreactor and is an integral part of all  the final stages of the sewage treatment plant process. The quality of the separation process is  as important to the final wastewater quality as  the biological treatment itself. <br> <br>
<h5>Advanced Tertiary Treatment:</h5> <br> 
Tertiary and advanced wastewater treatment is used to remove certain wastewater constituents that cannot be removed by secondary treatment. Various treatment processes are required to remove nitrogen, phosphorus, additional particulate matter, refractory organics, or dissolved solids. Advanced care is sometimes called tertiary care because it  usually follows expensive secondary care. However, advanced treatment processes may be combined with primary or secondary treatment (e.g. the addition of chemicals to primary clarifiers or aeration tanks to remove phosphorus) or used in place of secondary treatment. (e.g. overland flow treatment of primary wastewater).
Advanced wastewater treatment in the pulp and paper industry  mainly focuses on additional biofilm reactors, ozonation, and membrane filtration techniques such as micro, ultra, or nanofiltration and reverse osmosis. <br> <br>
<h5>Filtration Assisted Crystallization Technology (TNO):</h5><br>
 Filtration Assisted Crystallization Technology (FACT) is TNO's patented hybrid process that combines heterogeneous crystallization with simple filtration. Heterogeneous nuclei should allow rapid crystallization and easy filtration.<br> <br>
 <h5>Multifo softening technology (Veolia):</h5><br>
Veolia has developed and deployed a highly agitated slurry precipitation process, including forced agitation, and introduced draft tube crystallizers with custom-designed mixers that enable very high agitation and minimize supersaturation zones. .<br> <br>
<h5>Softening and controlled precipitation technology:</h5><br> 
Particularly in the pulp and paper industry, the removal of a lime compound called calcium carbonate has become an important issue for wastewater reuse. According to crystallization theory, precipitation is defined as "reactive crystallization". This definition is preferred because it emphasizes the formation of  solid products by chemical reactions.<br> <br>
<h5>Electrodialysis:</h5><br> 
Electrodialysis is an electrochemical membrane separation process of ionic solutions that has been used in industry for  decades. It can be used to separate and concentrate salts, acids, and bases from aqueous solutions, separate singly charged ions from multiply charged ions, and separate ionic compounds from uncharged molecules.<br> <br>
<h5>Evaporation concentration:</h5><br> 
Evaporative concentration is a unit operation consisting of the separation of two liquids, representing the removal of a solvent (usually water) as a vapor from a solution or slurry. The goal of evaporative concentration is to obtain a very clean distillate that can be disposed of in nature, sent to a  treatment plant, or reused.  Evaporation has proven to be a highly efficient and reliable technique for treating industrial wastewater.<br> <br>
<h5>Advanced Cohesion:</h5><br> 
The chemical aggregation process is an important process that facilitates the aggregation of particles after they have been destabilized by  chemical agents.
In the pulp and paper industry, flocculation is involved in various parts of the process. It is essential for forming paper webs on forming wires, determines retention, drainage rate, and  formation, and  is also used for colloidal wastewater treatment. Separate the  material and concentrate it into a sludge.<br> <br>
<h5>Ozone/AOP technology:</h5> <br> 
Today ozone and UV are  known and proven in the field of water and wastewater treatment. Ozone is a versatile and powerful oxidant, and UV is the best available  disinfection technology in terms of process results, facility design, and cost. The main purpose of these combined processes is to increase the oxidation potential. Complex chemistry (AOP) and biological oxidation processes are known to remove stubborn anthropogenic substances from wastewater. In addition, ozone decolorization has  been established as a purification application for biological treatment wastewater.<br> <br>
<h5>Membrane technologies (UF, NF, RO):</h5> <br> 
Membrane treatment in P&P-industry serves to optimize loop closure and therefore helps to reduce fresh water intake as well as wastewater treatment. Other purposes of membrane processes are: improved product quality because of lowered pollution of loop water, re-use of treated effluent in production, recovery of valuable substances e.g. coating pigments and minimizing environmental impact because of improved effluent quality. Full scale membrane filtration of Pulp & Paper effluents has been already installed in some mills.<br> <br>
Nanofiltration treatment of total effluent was installed in a newsprint paper mill several years ago. The advantage of NF in the recovery of water for recirculation is mainly that the clean water can be used even in the most demanding places in the paper mill.<br> <br>
<h5>MBR processes:</h5> <br> 
There is currently growing interest in the MBR (membrane bioreactor) process in municipal and industrial wastewater treatment. MBR is used in the paper industry as end-of-pipe technology as well as process integrated measure for the reduction of the concentration of detrimental substances in the water circuit. Especially in terms of effluent quality and economical aspects a MBR is a sustainable technology for the industrial wastewater treatment.<br> <br>
<h5>3FM technology:</h5> <br> 
The purpose of water filtration is to remove particles and colloids which either disturb the industrial process, deteriorate the quality of the final product or support bacteria and viruses that are a danger for human health.<br> <br>
The 3FM® system (Flexible Fibre Filter Module) is a new high speed filtration device that can be substituted for conventional solid-liquid separation process such as coagulation, settling and sand filtration.<br> <br>
Ultimately, the solutions to the profound challenge ahead – the shifting of industry awareness and the transformation of the industry’s lifeblood – requires continuous research and technology to be developed in the years to come.<br> <br>
    </p>
</div>
  </div>
 

  <section class="ftco-section">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="wrapper">
            <div class="row no-gutters">
              <div class="col-lg-8 col-md-12 order-md-last d-flex align-items-stretch">
                <div class="contact-wrap w-100 p-md-5 p-4">
                <form method="post" id="contactForm" class="contactForm" enctype="multipart/form-data" action="forms/form.php">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="name"></label>
                          <input type="text" class="form-control" name="firstname" placeholder="First Name" pattern="[a-zA-Z'-'\s]*" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="email"></label>
                          <input type="text" class="form-control" name="lastname" placeholder="Last Name" pattern="[a-zA-Z'-'\s]*" required>
                        </div>
                      </div>
                      <div class="col-md-6 pt-3">
                        <div class="form-group">
                          <label class="label" for="name"></label>
                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="col-md-6 pt-3">
                        <div class="form-group">
                          <label class="label" for="email"></label>
                          <input type="phone" class="form-control" name="phone"  placeholder="Phone" required>
                        </div>
                      </div>
                      <div class="col-md-12 pt-3">
                        <div class="form-group">
                          <label class="label" for="#"></label>
                          <textarea name="message" class="form-control" required cols="30" rows="4"
                            placeholder="Write your message"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 mt-5 text-end">
                        <div class="form-group">
                          <input type="submit" name="add" value="Send Message" class="btn btn-primary">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-4 col-md-5 d-flex align-items-stretch d-none d-lg-block" id="form-tnon">
                <div class="info-wrap contact-left d-flex justify-content-center align-items-center h-100 p-md-5 p-4">
                  <p class="left-pera text-light">Manage your <br> wastewater without <br> endangering your <br> people,
                    your <br> organization, or the <br> ecosystem.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <div style="background-color: #090949 ;" class="container-fluid">
    <footer class="pt-5">
      <div class="row">
        <div class="col-lg-5 col-md-4 mb-3">
          <h5 class="text-white">PRODUCTS</h5>
          <ul style="padding-left: 25px;" class="nav flex-column">
            <li class="nav-item mb-2"><a href="Polymers (Flocculants & Coagulants).php" class="nav-link p-0 text-muted">Polymers (Flocculants & Coagulants) used for wastewater treatment </a></li>
            <li class="nav-item mb-2"><a href="Biological Bioaugmentation products.php" class="nav-link p-0 text-muted">Biological Bioaugmentation products    </a></li>
            <li class="nav-item mb-2"><a href="Chemicals for RO Plant.php" class="nav-link p-0 text-muted">Chemicals for RO Plant  </a></li>
            <li class="nav-item mb-2"><a href="Speciality products used in pulp & paper industries.php" class="nav-link p-0 text-muted">Speciality products used in pulp & paper industries</a></li>
            <li class="nav-item mb-2"><a href="Chemicals used in food and beverages industries.php" class="nav-link p-0 text-muted">Chemicals used in food and beverages industries</a></li>
            <li class="nav-item mb-2"><a href="Chemicals used to improve the Dissolved Oxygen (DO) in wastewater.php" class="nav-link p-0 text-muted">Chemicals used to improve the Dissolved Oxygen (DO) in wastewater</a></li>
            <li class="nav-item mb-2"><a href="Cleaning chemicals.php" class="nav-link p-0 text-muted">Cleaning chemicals </a></li>
            <li class="nav-item mb-2"><a href="Operational training, support and maintenance.php" class="nav-link p-0 text-muted">Operational training, support and maintenance</a></li>
          </ul>
        </div>
  
        <div class="col-lg-4 col-md-4 mb-3">
          <h5 class="text-white">EQUIPMENT’S </h5>
          <ul style="padding-left: 25px;" class="nav flex-column">
            <li class="nav-item mb-2"><a href="Diffused Air Flotation units (DAF).php" class="nav-link p-0 text-muted">Diffused Air Flotation units (DAF) </a></li>
            <li class="nav-item mb-2"><a href="Specifically designed aeration system.php" class="nav-link p-0 text-muted">Specifically designed aeration system</a></li>
            <li class="nav-item mb-2"><a href="Chemicals dosing Pumps.php" class="nav-link p-0 text-muted">Chemicals dosing Pumps </a></li>
            <li class="nav-item mb-2"><a href="Specifically designed dosing system for MacroBoost products.php" class="nav-link p-0 text-muted">Specifically designed dosing system for MacroBoost products</a></li>
            <li class="nav-item mb-2"><a href="Filter Press.php" class="nav-link p-0 text-muted">Filter Press </a></li>
            <li class="nav-item mb-2"><a href="Mixer & inline static mixers.php" class="nav-link p-0 text-muted">Mixer & inline static mixers </a></li>
          </ul>
        </div>
  
        <div class="col-lg-3 col-md-4 mb-3">
          <h5 class="text-white">INDUSTRIES </h5>
          <ul style="padding-left: 25px;" class="nav flex-column">
            <li class="nav-item mb-2"><a href="Odour Control.php" class="nav-link p-0 text-muted">Odour Control </a></li>
            <li class="nav-item mb-2"><a href="Food & Beverages.php" class="nav-link p-0 text-muted">Food & Beverages </a></li>
            <li class="nav-item mb-2"><a href="Dairy Industries.php" class="nav-link p-0 text-muted">Dairy Industries </a></li>
            <li class="nav-item mb-2"><a href="Metal Processing.php" class="nav-link p-0 text-muted">Metal Processing </a></li>
            <li class="nav-item mb-2"><a href="Pulp & Paper Industries.php" class="nav-link p-0 text-muted">Pulp & Paper Industries</a></li>
            <li class="nav-item mb-2"><a href="Wood processing.php" class="nav-link p-0 text-muted">Wood processing </a></li>
          </ul>
        </div>

      </div>
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top">
        <p class="col-lg-4 col-md-3 mb-0 text-muted text-center">&copy; 2022 WACTS. All Rights Reserved</p>
        <ul class="nav col-lg-7 col-md-9 justify-content-center foot-non">
          <li class="nav-item"><a href="#" class="nav-link  text-muted">Privacy</a></li>
          <li class="nav-item"><a href="#" class="nav-link  text-muted">Terms & Condition</a></li>
          <li class="nav-item"><a href="#" class="nav-link  text-muted">Legal Information</a></li>
          <li class="nav-item"><a href="#" class="nav-link  text-muted">Sitemaps</a></li>
        </ul>
      </footer>
    </footer>
    
  </div>
</body>
<!-- JavaScript Bundle with Popper -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>
