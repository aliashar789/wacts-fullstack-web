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
            <a href="contact.php"  class=" naav-btn navquoyebtn rounded-pill">GET A QUOTE</a>
          </div>
        </div>
      </div>
    </nav>
    <video src="Background Video/production ID_5092302.mp4" autoplay loop playsinline muted></video>
    <div class="callout">
      <h1 class="text-light">Cleaning water and <br>
        enhancing life</h1>
      <p class="text-light">A solution that ensures your water supply will be reliable and <br> healthy for you and your
        future generations</p>
    </div>
  </section>
  <div class="" id="about">
    <div class="container">
    <h1 class="my-5">ABOUT THE COMPANY</h1>
    <p>WACTS is an Australian company that develops, produces, and delivers wastewater treatment systems for
      various markets. WACTS is a significant supplier of microbial products (AquaBoost products) for controlling
      odors in wastewater. Products made by MacroBoost are frequently utilized in the wastewater treatment
      processes for the food and beverage, dairy, and wood processing industries. We also provide a variety of
      specialty chemicals and polymers used in the treatment of wastewater. We also provide scale inhibitors and
      antiscalant chemicals used in reverse osmosis.</p></div>
  </div>
  <div class="" id="about2">
    <div class="container">
    <h1 class="my-5">WHAT is wastewater treatment?</h1>
    <p>WACTS is an Australian company that develops, produces, and delivers wastewater treatment systems for
      various markets. WACTS is a significant supplier of microbial products (AquaBoost products) for controlling
      odors in wastewater. Products made by MacroBoost are frequently utilized in the wastewater treatment
      processes for the food and beverage, dairy, and wood processing industries. We also provide a variety of
      specialty chemicals and polymers used in the treatment of wastewater. We also provide scale inhibitors and
      antiscalant chemicals used in reverse osmosis.</p></div>
  </div>
  <div class="container-fluid" id="event">
    <h2 class="evheading  text-center">How does it work?</h2>
    <span class="text-center"><h2 class="mb-5" style="color: #1F64FF;font-size: 45px;">____</h2></span>
    <div class="row" id="logos">
      <div class="col-lg-4 text-center">
        <a href=""> <img class="logo" src="icons/Vector.png" alt=""></a>
        <h3 class="epera">ANALYSIS</h3>
        <p>We identify the problem and your goals and develop a tailored approach specifically for you.</p>
      </div>
      <div class="col-lg-4 text-center">
        <a href=""> <img class="logo" src="icons/Group 163.png" alt=""></a>
        <h3 class="epera mt-2">DESIGN & DEVELOP</h3>
        <p>Our team will design and develop the most effective and cost-effective model according to your requirements.
        </p>
      </div>
      <div class="col-lg-4 text-center">
        <a href=""> <img class="logo" src="icons/Vector (1).png" alt=""></a>
        <h3 class="epera">DEPLOY</h3>
        <p>Deploy the designed model and ensure that it achieves the desired goals without complication.</p>
      </div>
    </div>
  </div>
  <div class="container" id="about">
    <h1 class="">Why is it IMportant?</h1>
    <span class="text-center"><h2 class="mb-5" style="color: #1F64FF;font-size: 45px;">____</h2></span>
    <p >Water treatment facilities are made to hasten the purification of water that occurs
      naturally. The natural process is overburdened by billions of humans and significantly more wastewater. Without
      wastewater treatment, the volume would wreak havoc, as it still does in impoverished nations today. Over 80% of
      all wastewater released worldwide goes untreated. The nations that do have water treatment facilities utilise a
      variety of techniques to purify water as much as possible before releasing it back into the environment to
      preserve the safety and well-being of people and the planet.</p>
  </div>
  <!-- ....  -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    
    <div class="carousel-inner car-card">
      
      <div class="carousel-item active">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0 card-padd shadow p-3 mb-5 bg-body rounded">
            
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Approximately 1.7 million deaths annually</h5>
                <p class="card-text">Approximately  1.7 million deaths occur annually due to the consumption of unhealth water</p>
               
              </div>
            </div>
            <div class="col-md-4 card-pic">
              <img src="images/Group 167.svg" class="img-fluid rounded-start" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card mb-3 card-padd" style="max-width: 540px;">
          <div class="row g-0  shadow p-3 bg-body rounded">
            
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">80% Untreated</h5>
                <p class="card-text">Globally 80% of the wastewater is left untreated</p>
                
              </div>
            </div>
            <div class="col-md-4 card-pic">
              <img src="images/Group 166.svg" class="img-fluid rounded-start" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev justify-content-end" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next justify-content-start" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center;">
      <p style="color: #6F6F6F; font-size:18px;" class="text-center p-2">We provide cutting-edge solutions that can help you save money, the environment, and nature.
      </p>
      <h1 style="color: #433c3c; font-size:18px;" class="text-center">Book you consultation today</h1>
      <span><a href="contact.php" style="background: #1F64FF;" class="button rounded-pill">BOOK NOW</a></span>
    </div>
  </div>
  <!-- ....  -->
  <div class="container-fluid gall-non " id="about">
   <a style="text-decoration: none;" href=""><h1 class="mb-5">Gallery</h1></a> 
    <div class="row">
      <img class="col-lg-6  my-2" src="images/3.JPG" alt="">
      <img class="col-lg-6  my-2" src="images/4.JPG" alt="">
    </div>
    <div class="row">
      <img class="col-lg-6  my-2" src="images/2.JPG" alt="">
      <img class="col-lg-6  my-2" src="images/1.JPG" alt="">
    </div>
  </div>

  <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="true">
    <a id="about" style="text-decoration: none;" href=""><h1 >Gallery</h1></a> 
    <div style="padding: 20px 20px;" class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/1.JPG" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/2.JPG" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/3.JPG" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/4.JPG" class="d-block w-100" alt="...">
      </div>
    </div>
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
  </div>


  <div class="container-fluid sec8">
    <div class="row mt-5"style=" align-items: center;">
      <div class="col-lg-6 col-md-6">
        <div style="flex-direction: column ; align-items: center;" class="d-flex ">
          <h1 class="col6-head">Book your <br> consultation <br>
            today</h1>
          <p class="pic-wpera" style="color:#6F6F6F ;">Manage your Wastewater with cost-friendly yet <br> effective solutions </p>
          <a href="contact.php" class="button btn-lg rounded col6-btn">BOOK NOW <span></a>
          
        </div>
      </div>
      <div class="col-lg-6 col-md-6 sec-picnon">
        <img src="images/Pattern.png" alt="" width="80%" style="float: right;" class="img-responsive" />
      </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>