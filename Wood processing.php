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
      <h1 class="text-light sub-callout">
        Wood Processing
    </h1>
    </div>
  </section>
  <div class="" id="sub-about">
    <div style="padding: 150px 12px;" class="container">
    <h1 class="mb-5">OVERview</h1>
    <p>Wastewater treatment from wood processing  is the procedure of controlling pollution, especially waste water, generated during wood processing. We  treat wastewater from wood processing plants with right technology to achieve high treatment efficiency. <br> <br>
        Wood brings many benefits to people, homes, furniture and valuable tools. To meet this need, many woodworking companies have molded, developed, manufactured and processed wood tools. <br><br>
         In addition to the benefits provided by the wood industry, wastewater from wood processing  needs to be treated. This is because the wood industry also poses problems that affect the environment and human health, such as: B. Toxic-rich Wastewater and Hazardous Waste. Hazardous solid waste, dust, etc. <br><br>
    </p>
    <h1 class="mb-5 mt-5">Causes of pollution from wood processing wastewater</h1>
    <p>It cooks the wood, soak the wood, and although the amount of waste liquid is small,  it is toxic as it contains impregnants and lignin. <br>
        Hot bending wastewater <br>
        Solvent treatment wastewater, steam transfer system leakage paint powder, boiler cleaning <br> 
        Composition of production wastewater: Production wastewater contains substances such as boric acid, boric acid, nitric acid, suspended solids, lignin, wood oil, and paint. <br> <br>
         Woodworking wastewater contains high concentrations of pollutants, mainly from: <br> <br>
        Arsenic. <br>
        Biochemical oxygen demand (BOD). <br>
        Chemical oxygen demand (COD). <br>
        Copper (Cu). <br>
        Chromium (Cr). <br>
        pH (abnormally high or low). <br>
        Phenol. <br>
        Grease. <br>
        Suspended Solids (TSS). <br> <br>
        Therefore, the wastewater generated during wood processing contains high concentrations of contaminants. If left unattended, it will cause serious environmental pollution.
    </p>
   
    <h1 class="mb-5 mt-5">How to treat wood processing wastewater?</h1>
    <p>The most commonly used  wastewater treatment method in wood processing plants is AAO technology. AAO technology is a continuous process of treating waste using many microorganisms such as anaerobic, anaerobic and aerobic. Under the action of microorganisms that break down organic compounds, pollutants are treated before they are released into the environment. <br> <br>
       <h5> Anaerobic treatment in wood processing factory wastewater treatment process </h5>
      <h5>  1- Hydrolysis:</h5> At this stage,  the action of enzymes secreted by bacteria transforms complex, insoluble substances  into simple substances. This process is slow. Degradation rate  depends on the pH value, particle size, and degradability of the substrate. <br> <br>
      <h5> 2 - Acidification:</h5> In this stage, fermenting bacteria convert soluble substances into simple substances such as volatile fatty acids, methanol, CO2 and H2. Formation of new biomass  can lower the pH to 4. <br> <br>
      <h5> 3 - Acetate formation:</h5> Acetate bacteria convert the acid phase products  into acetate, H2 and CO2, creating new growth. <br> <br>
         The three steps of hydrolysis, acidification and acetic acid showed little decrease in COD, and COD decreased only  in the methane phase.
    </p>
    <h1 class="mb-5 mt-5">Anoxic process</h1>
    <p>
        Wastewater contains compounds N and P. In anoxic tanks, anoxic microbiota develop under anaerobic conditions that process N and P through processes of nitrification and phosphorylation.
        aerotank process        
    </p>
    <h1 class="mb-5 mt-5">Aerotank process
    </h1>
    <p>Aerobic decomposition processes rely on the vital activity of aerobic microorganisms, especially aerobic bacteria, which  use dissolved oxygen in  water to degrade organic matter, microorganisms in wastewater. Denitrifying Pseudomonas, Bacillus, etc. reduce nitrate to N2. General conditions for nitrifying bacteria pH = 5.5 - 9, but  pH = 7.5 is optimal. Bacterial growth is slow at pH < 7,  dissolved oxygen is 0.5 mg/l and temperature is 5 - 40°C. <br> <br>
        This process occurs rapidly in the presence of aeration and increases the amount of microbial activity by increasing  activated sludge, regulating  nutrient levels and inhibiting  toxins that affect sludge and microbial activity. Also, the suitable processing temperature  is 20 to 40°C, with 25 to 30°C being the best.
        AeroTank Tanks have additional contact materials to increase the opportunity for microorganisms to come into contact with the wastewater and create an environment for microorganisms to grow and adhere to. Dissolved oxygen is supplied by a blower through a manifold system. Aerotank's BOD removal efficiency is  about 80-85% lower than the input. Today, wastewater is almost completely purified. Wastewater from the Aerotank aeration tank overflows from sedimentation tank 2.
    </p>
    <h1 class="mb-5 mt-5">Clarifier
    </h1>
    <p>Wastewater is subsequently sent to the sedimentation tank 2 to separate the biological sludge. Most of the biological sludge (activated sludge) present in the wastewater settles to the bottom of the unit. After settling, part of the sludge is circulated to the aerobic biotank. Make sure that the amount of sludge is always stable so that microorganisms can be active. Excess sludge is treated with a sludge dehydrator. After passing through the sedimentation tank, the fresh water passes through the sterilization tank, and at the same time, a disinfectant (10% NaOCl solution) is injected into the tank to thoroughly treat pathogenic bacteria such as E. coli and coliforms.
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
