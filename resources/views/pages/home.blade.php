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
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Join  &nbsp&nbsp&nbsp&nbsp<i class="fa-regular fa-user"></i></a>
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

      <!-- Carousel  -->

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="4000">
            <img src="images_home/hero_10_v2.png" class="d-block w-100" alt="property">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="images_home/hero_09_v2.png" class="d-block w-100" alt="property">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="images_home/hero_06_v3.png" class="d-block w-100" alt="property">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

{{-- content1  mt-5 pt-5 mb-5 pb-5--}}

<div class="content1-con container ">
  <div class="content1-row row">
    <div class="content-col col-md-12">
      <h1>Yup! You can bid for properties now via touch of a button.</h1>
      <h1>Anywhere. At work. At home.</h1>
    </div>
  </div>
</div>

<!-- content2 ############### -->

<div class="content2-con mt-5 mb-5">
  <div class="container shadow-lg">
    <div class="content2-row row m-3">
      <div class="content2-image col-lg-6 col-md-12">
        <img class="img-fluid" style="width: 750px;" height="400px" src="images_properties/property_C/prop_c_02.png" alt="">
      </div>
      <div class="showcase-text col-lg-6 col-md-12 col-sm-12 align-self-center">
        <h2>Luxury Outlook</h2>
        <h3>750M Annual Sales</h3>
        <h3>250+ Properties Sold</h3>
        <h3>300K Bidders</h3>
        {{-- <a class="btn btn-outline-light" href="properties">See Properties</a> --}}
      </div>
    </div>
  </div>
</div>

<!-- showcase1 ############### mt-5 mb-5 pb-5 -->

<div class="show-header">
  <div class="header-con container-fluid">
      <div class="header-row row">
          <div class="header-col col-md-12">
              <h2>For those desiring an exceptional living experience and a distinctive home, look no further than AuctionRS.</h2>
              <p>Established on a foundation of tradition and committed to advancing the luxury real estate sector, AuctionRS provides transformative experiences through its global network of outstanding agents.</p>
          </div>
      </div>
  </div>
</div> 

<!-- Showcase2 ###############-->

<div class="showcase-section mt-5 pt-5 mb-5 pb-5">
    <div class="showcase-container container">
      <div class="showcase-row row m-3">
        <div class="showcase-image col-lg-6 col-md-12">
          <img class="img-fluid" style="width: 750px;" height="400px" src="images_home/house_01.jpg" alt="">
        </div>
        <div class="showcase-text col-lg-6 col-md-12 col-sm-12 align-self-center">
          <h2>Exceptional Properties, Unrivaled Lifestyles.</h2>
          <p>
              Dedicated to innovating the luxury real estate industry, AuctionRS orchestrates transformative experiences through prestigious auctions and a global network of exceptional participants.
          </p>
          <a class="btn btn-outline-light" href="properties">See Properties</a>
          
        </div>
      </div>
    </div>
  </div>
  

<!-- Footer  -->

<div class="followus-container container-fluid">
    <div class="followus-row row">
      <div class="followus-col col-lg-12">
        <ul class="list-unstyled flex-grow-1 pe-3">
          <!-- <li class="mb-3 fs-3">Follow Us &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li> -->
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


<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>    