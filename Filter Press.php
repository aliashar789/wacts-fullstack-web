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
  <nav class="navbar fixed-top navbar-expand-lg "id="nav">
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
        Filter Press
    </h1>
    </div>
  </section>
  <div class="" id="sub-about">
    <div style="padding: 150px 12px;" class="container">
    <h1 class="mb-5 mt-5">OVERVIEW</h1>
    <p>A filter press is one of the oldest and most reliable dewatering equipment. It is used for wastewater treatment in various industries and applications. Filter presses separate solids and liquids and remove impurities and suspended matter from industrial wastewater. A filter press separates liquids and solids. In particular, filter presses separate liquids and  solids by pressure filtration through filter media. The slurry is then pumped into a filter press and dewatered under pressure. 
    </p>
    <h1 class="mb-5 mt-5">components </h1>
    <p>Following are the components of a Filter Press <br> <br>

        Frame <br>
        Filter Plates <br>
        Manifold (piping and valves) <br>
        Filter Cloth (This is key for optimizing filter press operations. <br> <br>
        
        Basically, the filter press design depends on the amount of dewatering  and the type of liquid fertilizer. WACTS  is a specialist in liquid and solid separation. We offers a wide range of filter their press types and capacities to meet your specific application needs for trouble-free and economical dewatering.           
    </p>
    <h1 class="mb-5 mt-5">HOW DOES IT WORK?</h1>
    <p>During the filling cycle, sludge is pumped into the filter press and spread evenly throughout the filling cycle. Solids collect on the filter cloth and form a filter cake in the void volume of the plate. Filtrate or clean water exits the filter plate through the openings, discharging clean water to the side of the plate. <br> <br>
        Filter press is a pressure filtration process. As the feed pump of the filter press  builds up pressure,  solids build up in the chamber until it is completely filled with solids. This will form the cake. When the plate is full, the filter cake is peeled off and the cycle is complete. In addition, many higher capacity filter presses use high speed automatic knife gates that reduce cycle time. Matec develops filter presses dedicated to fully automatic 24-hour operation in harsh environments such as mines for wastewater treatment and chemical manufacturing plants.         
    </p>
    <img class="w-100 my-5" src="images-2/3.png" alt="">
    <h1 class="mb-5 mt-5">What Is A Filter Press Used For? </h1>
    <p>Different types of filter presses work differently, but they all work on the same principle. A slurry of water mixed with solids is pumped into the press  using a transfer pump. In presses, slurry is forced through chambers of filter plates, often under pressure  from a centrifugal pump or similar device. This removes contaminants from the water by forming a "filter cake" of solids  on the machine's filter.
        Once the filter press's chambers  are filled, its filtration cycle is complete and the machine releases the filter cake. These cakes can be easily removed and can filter  water with high efficiency. High speed automatic knife gate valves can be used with filter presses for faster cake removal and cycle times. Harsh environments that require continuous operation, such as mining processes and chemical manufacturing plants, require fully automated filter press designs to handle  24-hour workloads. 
        To get the best performance from your filter press, your filter mesh must be specifically designed for your application and the type of solids  you are filtering. <br><br>
        
        The following can also be customized to suit individual needs. <br> <br>
        
        1-Mechanical design <br>
        2-Filtration capacity <br>
        3-Plate size and number of chambers <br> <br>
        
        Additionally, additional systems such as cloth washing systems, drip trays and cake shields can be used to further improve the performance and capabilities of your filter press. Ultimately, the filter press should be designed based on the expected volume and type of slurry being processed. <br>
        Since filter presses operate on pressure, a device that uses high pressure  technology to increase pressure is ideal for optimizing  filter press systems. This is the secret to the success of our filter presses. With pressures from 21 to 30 bar, it handles even the toughest and toughest sludges, regardless of industry or application.
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
