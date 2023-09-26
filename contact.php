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
</head>

<body>

<nav class="navbar bg-light fixed-top navbar-expand-lg ">
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
                <a class="nav-link text-dark" href="index.php"  aria-current="page">
                  HOME
                </a>
              </li>
              <li class="nav-item nav-item1 nav-item2 dropdown">
                <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <a class="nav-link text-dark" href="#" aria-current="page">
                  ORDER CONTROL
                </a>
              </li>
              <li class="nav-item nav-item1 nav-item2 dropdown">
                <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <a class="nav-link text-dark " href="contact.php" aria-current="page">
                  CONTACT
                </a>
              </li>
            </ul>
            <a href="contact.php" class="button naav-btn rounded-pill">GET A QUOTE</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="wrapper">
            <div class="row no-gutters">
              <div style="margin-top:150px;"  class="col-lg-6 col-md-12 order-md-last d-flex align-items-stretch">
                  <div class="contact-wrap w-100 p-md-5 p-4">
                    <h2 class="contpg-head">GET IN TOUCH TODAY</h2>
                    <P class="my-2 contpg-pera">Long emails are obsolete in today's world. Contact us with even the <br> tiniest of inquiries. They can sometimes lead to the most valuable <br> work.</P>
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
                          <input style="background-color: white; border-color:#494949 ; color:#494949 ;" type="submit" name="add" class="btn btn-primary text-dark btn-lg rounded-pill">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 d-flex align-items-stretch d-none d-lg-block" id="form-tnon">
                  <img  class="w-100" src="Images-2/1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
</body>
<!-- JavaScript Bundle with Popper -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>
