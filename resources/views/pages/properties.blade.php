<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>AuctionRS | Welcome</title>
    <link rel="icon" type="image/x-icon" href="./images_logo/favicon_01.png">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="images_logo/auction_logo3_v2.png" alt="" width="190" height="40" class="d-inline-block align-text-top"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">AuctionRS</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-items">
                        <a href="properties" class="nav-link">Properties</a>
                    </li>
                    <li class="nav-items">
                        <a href="company" class="nav-link">Company</a>
                    </li>
                    <li class="nav-items">
                        <a href="agents" class="nav-link">Agents</a>
                    </li>
                    <li class="nav-items">
                        <a href="contactus" class="nav-link">Contact Us</a>
                    </li>
                    
                </ul>
                   
                  <button type="button" class="join-btn btn btn-danger">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-0">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Join  &nbsp&nbsp<i class="fa-regular fa-user"></i></a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login">Login</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="register">SignUp</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="user_currentbidding">Account</a></li>
                      </ul>
                    </li>
                  </ul>
                </button>
                </ul>
            </div>
          </div>
        </div>
      </nav>

{{-- cards1-header  ######################## --}}

<div class="header-con container mt-5 mb-5">
    <div class="header-row row">
        <div class="header-col col-md-12">
            <h4 class="">For Auctions</h4>
        </div>
    </div>
</div>

{{-- cards1 ############################### --}}

<div class="cards1-con container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 shadow-lg">
            <img src="images_properties/property_A/prop_01.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">3817 South Garden, Palisades Ayala Alabang, PH</h5>
              <h4 class="card-text">P21,500,000</h4>
              <h3 class="card-text">Feb 01 - Feb 29, 2024 | 9:00pm</h3>
              <a href="feature01" class="btn btn-outline-danger">View More</a>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-lg">
              <img src="images_properties/property_F/prop_f_01.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">1522 Villefrenche, Southpines Trece Martires, Cavite PH</h5>
                <h4 class="card-text">P28,400,000</h4>
                <h3 class="card-text">Feb 01 - Feb 29, 2024 | 9:00pm</h3>
                <a href="feature02" class="btn btn-outline-danger">View More</a>
              </div>
            </div>
          </div>
        <div class="col">
          <div class="card h-100 shadow-lg">
            <img src="images_properties/property_C/prop_c_04.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">7869 Fareholm Drive, Tagaytay Nasugbu Hwy, Laurel Batangas, PH</h5>
              <h4 class="card-text">P31,400,000</h4>
              <h3 class="card-text">Feb 01 - Feb 29, 2024 | 9:00pm</h3>
              <a href="feature03" class="btn btn-outline-danger">View More</a>
            </div>
          </div>
        </div>
      </div>
</div>

{{-- cards2-header  ######################## --}}

<div class="header2-con container mt-5 pt-5 mb-5">
    <div class="header2-row row">
        <div class="header2-col col-md-12">
            <h4 class="">Upcoming Auctions</h4>
        </div>
    </div>
</div>

{{-- cards2 ############################### --}}

<div class="cards2-con container mt-5 mb-5 pb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 shadow-lg">
            <img src="images_properties/property_E/prop_e_01.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">6080 Alfiena Brgy. Hacienda Dolores Banaba, Porac Pampanga PH</h5>
              <h4 class="card-text">P18,200,000</h4>
              <h3 class="card-text">March 01 - March 30, 2024 | 9:00pm</h3>
              {{-- <a href="" class="btn btn-outline-danger">Preview</a> --}}
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-lg">
              <img src="images_properties/property_B/prop_b_01.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">2752 Rose Avenue, Broadfield Centre, Lipa City Batangas PH</h5>
                <h4 class="card-text">P11,800,000</h4>
                <h3 class="card-text">March 01 - March 30, 2024 | 9:00pm</h3>
                
              </div>
            </div>
          </div>
        <div class="col">
          <div class="card h-100 shadow-lg">
            <img src="images_properties/property_D/prop_d_01.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">5531 Lorean Place, Citrus North, North Triangle, Bagong Pagasa, Quezon City PH</h5>
              <h4 class="card-text">P41,600,000</h4>
              <h3 class="card-text">March 01 - March 30, 2024 | 9:00pm</h3>
              
            </div>
          </div>
        </div>
      </div>
</div>

<!-- Footer  -->

<div class="followus-container container-fluid">
    <div class="followus-row row">
      <div class="followus-col col-lg-12">
        <ul class="list-unstyled flex-grow-1 pe-3">
          
          <li class="mb-1 fs-6"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook fa-xl"></i></a></li>
          <li class="mb-1 fs-6"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-xl"></i></a></li>
          <li class="mb-1 fs-6"><a href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin fa-xl"></i></a></li>
          <li class="mb-1 fs-6"><a href="https://twitter.com/"><i class="fa-brands fa-x-twitter fa-xl"></i></a></li>
          <li class="mb-1 fs-6"><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube fa-xl"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

<footer class="footer pt-5 pb-2">
    <div class="container">
      <div class="footer-row row">
        <div class="footer-col col-lg-3 col-sm-12">
          <a href="home"><img src="images_logo/auction_logo3_v2.png" alt="" width="190" height="40"/></a>
        </div>
        <div class="footer-col col-lg-3 col-sm-12">
          <h3>Head Office</h3>
          <ul class="list-unstyled">
            <li class="mb-2"><h2>Techno Plaza Bldg</h2></li>
            <li class="mb-2"><h2>Bonifacio Global City</h2></li>
            <li class="mb-2"><h2>28th Drive High Street</h2></li>
            <li class="mb-2"><h2>Taguig Philippines</h2></li>
          </ul>
        </div>
        <div class="footer-col col-lg-3 col-sm-12">
          <h3>Company</h3>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="properties">Properties</a></li>
            <li class="mb-2"><a href="company">About Us</a></li>
            <li class="mb-2"><a href="agents">Agents</a></li>
            <li class="mb-2"><a href="contactus">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col col-lg-3 col-sm-12">
          <h3>More</h3>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="terms">Terms and Conditions</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <hr />
    <div class="copyright-container container">
      <div class="copyright-row row">
        <div class="copyright-col col-md-12 text-center">
          <p>&copy; Copyright 2024 | WD91P | Kodego</p>
        </div>
      </div>
    </div>
  </footer>   


<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>    