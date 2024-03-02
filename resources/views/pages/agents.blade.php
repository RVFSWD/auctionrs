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

<style>

@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css");
@import url('https://fonts.googleapis.com/css2?family=Antonio&family=Bilbo+Swash+Caps&family=Days+One&family=Fjalla+One&family=Josefin+Sans&family=Poppins&family=Tangerine:wght@700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

h1 {
    font-weight: 800;
}

p {
    font-weight: 500;
}

h4 {
    color: black;
}

h5 {
    color: black;
}

body {
    background-color: #fff;
    color: black;
    font-family: sans-serif;
}    

.agent-header {
    display: flex;
    justify-content: center;
    align-content: center;
    text-align: center;
    font-size: 25px;
    margin: 60px auto 20px;
}    

.agents-card .card {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 40px auto;
}    

.card {
 width: 300px;
 height: 420px;
 padding: .8em;
 background: #f5f5f5;
 position: relative;
 overflow: visible;
 box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.card-img {
 background-color: #DC3545;
 height: 200px;
 width: 230px;
 border-radius: .5rem;
 transition: .3s ease;
}

.card-info {
 padding-top: 5%;
}

/* svg {
 width: 20px;
 height: 20px;
} */

/* .card-footer {
 width: 100%;
 display: flex;
 justify-content: space-between;
 align-items: center;
 padding-top: 10px;
 border-top: 1px solid #ddd;
} */

/*Text*/
.text-title {
    font-weight: 900;
    display: flex;
    flex-direction: row;
    font-size: 17px;
    margin: 5px 60px 5px 5px;
    padding: 5px 60px 5px 5px;
     /* font-size: 1.2em;
    line-height: 1.5; */
}

.text-body {
    font-size: 15px;
    margin: 2px 60px 2px 5px;
    padding: 2px 60px 2px 5px;
 /* font-size: .9em;
 padding-bottom: 3px; */
}

/*Button*/
/* .card-button {
 border: 1px solid #252525;
 display: flex;
 padding: .3em;
 cursor: pointer;
 border-radius: 50px;
 transition: .3s ease-in-out;
} */

/*Hover*/
.card-img:hover {
 transform: translateY(-15%);
 box-shadow: rgba(226, 196, 63, 0.25) 0px 13px 47px -5px, rgba(180, 71, 71, 0.3) 0px 8px 16px -8px;
}

.card-button:hover {
 border: 1px solid #DC3545;
 background-color: #DC3545;
}


</style>    

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


{{-- agnets card header ############# --}}

<div class="agent-header container">
    <div class="agent-row row">
        <div class="agent-col col-md-12">
            <h3>Meet The Team</h3>
        </div>
    </div>
</div>

<!-- Agents ###################### m-5 pb-5 -->

    <div class="agents-card ">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card">
                <img src="images_agents/director_v2.jpg" class="card-img" alt="...">
                <div class="card-info">
                  <p class="text-title">Thomas Andre</p>
                  <p class="text-body">Project Director</p>
                  <p class="text-title">Contact</p>
                  <p class="text-body">0945.355.2990</p>
                  <p class="text-body">0928.166.5221</p>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
                <img src="images_agents/agent_01_v2.jpg" class="card-img" alt="...">
                <div class="card-info">
                    <p class="text-title">Cha Villarano</p>
                    <p class="text-body">Property Specialist</p>
                    <p class="text-title">Contact</p>
                    <p class="text-body">0927.188.4225</p>
                    <p class="text-body">0928.799.1222</p>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
                <img src="images_agents/agent_02_v2.jpg" class="card-img" alt="...">
                <div class="card-info">
                    <p class="text-title">Jaime Salazar</p>
                    <p class="text-body">Property Specialist</p>
                    <p class="text-title">Contact</p>
                    <p class="text-body">0917.422.7228</p>
                    <p class="text-body">0955.880.4242</p>
                </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  {{-- agents card section-2 ###########################################  --}}

  <div class="agents-card mb-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
              <img src="images_agents/agent_03_v2.jpg" class="card-img" alt="...">
              <div class="card-info">
                <p class="text-title">Peter Serano</p>
                    <p class="text-body">Property Specialist</p>
                    <p class="text-title">Contact</p>
                    <p class="text-body">0925.233.6767</p>
                    <p class="text-body">0915.226.1212</p>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
              <img src="images_agents/agent_04_v2.jpg" class="card-img" alt="...">
              <div class="card-info">
                <p class="text-title">Justin Geto</p>
                    <p class="text-body">Property Specialist</p>
                    <p class="text-title">Contact</p>
                    <p class="text-body">0927.232.5567</p>
                    <p class="text-body">0918.788.9221</p>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
              <img src="images_agents/agent_05_v2.jpg" class="card-img" alt="...">
              <div class="card-info">
                <p class="text-title">Mika Tampil</p>
                    <p class="text-body">Property Specialist</p>
                    <p class="text-title">Contact</p>
                    <p class="text-body">0923.677.1220</p>
                    <p class="text-body">0925.441.1552</p>
              </div>
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