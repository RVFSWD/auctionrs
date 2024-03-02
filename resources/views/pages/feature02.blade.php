<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <title>AuctionRS | Welcome</title>
    <link rel="icon" type="image/x-icon" href="./images_logo/favicon_01.png">
    
<style>

@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css");
@import url('https://fonts.googleapis.com/css2?family=Antonio&family=Bilbo+Swash+Caps&family=Days+One&family=Fjalla+One&family=Josefin+Sans&family=Poppins&family=Tangerine:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap')



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

body {
    background-color: #fff;
    color: black;
    font-family: sans-serif;
}

/* navbar ################################ */

.navbar-nav a {
    margin-right: 30px;
    color: black;
    font-size: 17px;
}


.nav-items {
    margin: 4px 5px;
}

.join-btn {
    padding: 2px 0px;
}

.join-btn ul a {
    color: #212529;
    margin: 0px 10px;
    /* padding: 0px 10px; */
}

.join-btn ul a:hover {
    color: #212529;

}

/* gallery ################### */

.container {
  position: relative;
  
}

.gal-con {
    background-color: #fff;
    padding-top: 20px;
    padding-bottom: 20px;
    width: 80%;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

.mySlides img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    border-radius: 10px;
    /* padding-top: 30px;
    padding-bottom: 20px;  */
}

.img-row img {
    margin: 0px auto;
    border-radius: 10px;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: black;
  font-weight: bold;
  font-size: 30px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  text-decoration: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #fff;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

/* feat1 ################################## */
/* header  */

.feat1-con {
  background-image: linear-gradient(to right, #434343 0%, black 100%);
  color: #fff;
  padding: 90px 20px 10px;
}

.feat1-con h4 {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    margin: 30px auto;
}

/* feat2 ################################## */

.feat2-con {
  background-image: linear-gradient(to right, #434343 0%, black 100%);
  color: #fff;
  padding: 30px 20px 100px;
}

.feat2-col h4 {
    display: flex;
    flex-direction: row;
    font-size: 17px;
    color: #fff;
    margin: 10px 50px;
}

.feat2-col h3 {
    display: flex;
    flex-direction: row;
    font-size: 20px;
    /* color: black; */
    margin: 10px 50px;
}

/* feat3 ################################## */
/* header  */

.feat3-con {
  background-image: linear-gradient(to right, #434343 0%, black 100%);
  color: #fff;
  padding: 80px 30px 20px;
}

.feat3-col h2 {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    color: #fff;
    margin: 40px auto 20px;
}

/* feat4 ################################## */

.feat4-con {
  background-image: linear-gradient(to right, #434343 0%, black 100%);
  color: #fff;
  padding: 10px 30px 100px;
}

.feat4-col h2 {
    display: flex;
    flex-direction: row;
    font-size: 20px;
    font-weight: 600;
    color: #fff;
    margin: 30px 100px 40px;
}

.feat4-col h4 {
    display: flex;
    flex-direction: row;
    font-size: 17px;
    color: #fff;
    margin: 10px 100px;
}

.feat4-col h3 {
    display: flex;
    flex-direction: row;
    font-size: 17px;
    color: #fff;
    margin: 10px 100px 40px;
}




/* new button ######################### */

.start-col button {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  position: relative;
  background-color: #dc3545;
  border-radius: 5px;
  box-shadow: rgb(121, 18, 55) 0px 4px 0px 0px;
  padding: 10px;
  margin: 20px auto 30px;
  background-repeat: no-repeat;
  cursor: pointer;
  box-sizing: border-box;
  width: 200px;
  height: 49px;
  color: #fff;
  border: none;
  font-size: 20px;
  transition: all 0.3s ease-in-out;
  z-index: 1;
  overflow: hidden;
}

.start-col button::before {
  content: "";
  background-color: rgb(248, 50, 93);
  width: 0;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  transition: width 700ms ease-in-out;
  display: inline-block;
}

.start-col button:hover::before {
  width: 100%;
}

.start-col a {
    text-decoration: none;
}



/* map API ############## */

.map-con {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 30px auto 30px;
}



/* footer #################### */  

.followus-container {
    background-color: #f5f5f5;
    /* padding: 20px auto 5px; */
}

.followus-container i {
    padding: 20px auto 5px;
}


.followus-col ul {
    display: flex;
    flex-direction: row;
    justify-content: center;
    text-align: center;
    margin: 20px auto;
}

.followus-col ul i {
    color: black;
    text-decoration: none;
    font-size: 30px;
    margin: 5px 20px;
    padding-top: 10px;
}

.followus-col hr {
    width: 100%;
}

.footer h3 {
    font-size: 25px;
}

.footer h2 {
    font-size: 17px;
    color: black;
}

.footer ul a {
    color: black;
    text-decoration: none;
    font-size: 17px;
  }
  
.footer ul i:hover {
    color: #DC3545;
  }

.footer ul, p {
    font-size: 10px;
}

.footer .copyright-container p {
    font-size: 10px;
}

@media only screen and (max-width: 768px) {
    .footer-row .footer-col {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
              
    }
}

@media only screen and (max-width: 991px) {
    .footer-row .footer-col {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
              
    }
}

</style>
    
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

{{-- gallery ################### style="width:100%" --}}

<div class="gal-con container">
    <div class="gal-row row">
        <div class="gal-col col-md-12">
            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                  <img src="images_properties/property_F/prop_f_01.png" class="img-fluid" style="width: 700px;" height="500px">
              </div>
            
              <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                  <img src="images_properties/property_F/prop_f_02.png" class="img-fluid" style="width: 700px;" height="500px">
              </div>
            
              <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                  <img src="images_properties/property_F/prop_f_03.png" class="img-fluid" style="width: 700px;" height="500px">
              </div>
            
              <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                  <img src="images_properties/property_F/prop_f_04.png" class="img-fluid" style="width: 700px;" height="500px">
              </div>
            
              <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                  <img src="images_properties/property_F/prop_f_05.png" class="img-fluid" style="width: 700px;" height="500px">
              </div>
            
              <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                  <img src="images_properties/property_F/prop_f_06.png" class="img-fluid" style="width: 700px;" height="500px">
              </div>

              <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                  <img src="images_properties/property_F/prop_f_07.png" class="img-fluid" style="width: 700px;" height="500px">
              </div>

              <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                  <img src="images_properties/property_F/prop_f_08.png" class="img-fluid" style="width: 700px;" height="500px">
              </div>
            
              <!-- Next and previous buttons -->
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
              <!-- Image text -->
              <div class="caption-container">
                <p id="caption"></p>
              </div>
            
              <!-- Thumbnail images -->
              <div class="img-row row">
                <div class="column">
                  <img class="demo cursor" src="images_properties/property_F/prop_f_01.png" class="img-fluid" style="width:100%" onclick="currentSlide(1)" alt="">
                </div>
                <div class="column">
                  <img class="demo cursor" src="images_properties/property_F/prop_f_02.png" class="img-fluid" style="width:100%" onclick="currentSlide(2)" alt="">
                </div>
                <div class="column">
                  <img class="demo cursor" src="images_properties/property_F/prop_f_03.png" class="img-fluid" style="width:100%" onclick="currentSlide(3)" alt="">
                </div>
                <div class="column">
                  <img class="demo cursor" src="images_properties/property_F/prop_f_04.png" class="img-fluid" style="width:100%" onclick="currentSlide(4)" alt="">
                </div>
                <div class="column">
                  <img class="demo cursor" src="images_properties/property_F/prop_f_05.png" class="img-fluid" style="width:100%" onclick="currentSlide(5)" alt="">
                </div>
                <div class="column">
                  <img class="demo cursor" src="images_properties/property_F/prop_f_06.png" class="img-fluid" style="width:100%" onclick="currentSlide(6)" alt="">
                </div>
                
              </div>
        </div>
    </div>  
</div>


{{-- feature1 ###################### --}}

<div class="feat1-con container-fluid mt-5">
    <div class="feat1-row row">
        <div class="feat1-col col-md-12">
            <h4>1522 Villefrenche, Southpines Trece Martires, Cavite PH</h4>
        </div>
    </div>
</div>

{{-- feature2 ###################### --}}

<div class="feat2-con container-fluid mb-5">
    <div class="feat2-row row">
        <div class="feat2-col col">
            <h4>Price</h4>
            <h3>P28,400,000</h3>
        </div>
        <div class="feat2-col col">
            <h4>Bedrooms</h4>
            <h3>9</h3>
        </div>
        <div class="feat2-col col">
            <h4>Bathrooms</h4>
            <h3>12 Full</h3>
        </div>
        <div class="feat2-col col">
            <h4>Interior</h4>
            <h3>11,269 Sq Ft.</h3>
        </div>
        <div class="feat2-col col">
            <h4>Exterior</h4>
            <h3>1.09 Acre(s)</h3>
        </div>
    </div>
</div>

{{-- maps API ###################### --}}

<div class="map-con container mt-5 pt-5 mb-5 pb-5 ">
    <div class="map-row row">
      <div class="map-col col-md-12">
          
          <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1nKY-SaQfB83-3dlgWOsRP4A1x_sdVlI&ehbc=2E312F&noprof=1" width="950" height="720"></iframe>
      </div>
    </div>
</div>

{{-- feature3 ###################### --}}

<div class="feat3-con container-fluid mt-5">
    <div class="feat3-row row">
        <div class="feat3-col col-md-12">
            <h2>Amenities & Features</h2>
        </div>
    </div>
</div>

{{-- feature4 ###################### --}}

<div class="feat4-con container-fluid mb-5">
    <div class="feat4-row row">
        <div class="feat4-col col">
            <h2>Listing Details</h2>

            <h4>PROPERTY ID</h4>
            <h3>E9Z8GS</h3>

            <h4>PROPERTY TYPE</h4>
            <h3>Single Family Homes</h3>

            <h4>MARKETED BY</h4>
            <h3>AuctionRS</h3>

            <h4>STATUS</h4>
            <h3>Available</h3>
        </div>
        <div class="feat4-col col">
            <h2>Utilities & Building</h2>

            <h4>YEAR BUILT</h4>
            <h3>2022</h3>

            <h4>LOT SIZE UNIT</h4>
            <h3>Acre(s)</h3>

            <h4>LOT SIZE</h4>
            <h3>1.09</h3>

            <h4>PARKING</h4>
            <h3>garage 5+ cars</h3>
        </div>
        <div class="feat4-col col">
            <h2>Interior</h2>

            <h4>AMENITIES</h4>
            <h3>Pool, Security System, Intercom</h3>

            <h4>FULL BATHROOMS</h4>
            <h3>12</h3>

            <h4>FIREPLACE TYPE</h4>
            <h3>Electric</h3>

            <h4>BEDROOMS</h4>
            <h3>9</h3>
        </div>
    </div>
</div>

{{-- start-button ###################### btn-lg--}}

<div class="start-con container mt-5">
    <div class="start-row row">
        <div class="start-col col-md-12">
            <h2> 
              
            </h2>
            <a href="bidding01" class="start2-btn">
            <button type="button" class="btn btn-danger">
                Start Bidding   
            </button>
            </a>
          
        </div>
    </div>
</div>

<!-- Footer ######################## -->

<div class="followus-container container-fluid mt-5">
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
  
<script>

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>  


<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> 