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
/* 
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css");
@import url('https://fonts.googleapis.com/css2?family=Antonio&family=Bilbo+Swash+Caps&family=Days+One&family=Fjalla+One&family=Josefin+Sans&family=Poppins&family=Tangerine:wght@700&display=swap'); */

/* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
} */

/* h1 {
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
} */

/* body {
    background-color: #fff;
    color: black;
    font-family: sans-serif;
} */

body{
  background-color: #fff;
  width: 100%;
  /* height: 100vh; */
  display: flex;
  align-items: center;
  overflow: hidden;
/*    background: linear-gradient(30deg, rgb(100, 241, 84), rgb(92, 92, 229), rgb(111, 30, 30)); */
}

.container {
  width: 100%;
  height: 20vh;
  display: flex;
  flex-direction: row;
  align-items: center;
  overflow: hidden;
}

.imgContainer {
  width: 100%;
  height: 600px; 
  position: absolute; 
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 1s;
}

.slide_div {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 30px 0 30px;
}

img {
  position: relative;
  height: 300px;
  width: 500px;
  /* filter: saturate(10%); */
  transition: 0.7s;
  background-color: rgba(0, 0, 0, 0.4);
  border-radius: 10px;
}

.button {
  position: absolute;
  height: 300px;
  width: 500px;
  transition: 0.7s;
  background-color: rgba(0, 0, 0, 0.4);
  border-radius: 10px;
  
}

.button:hover {
  background-color: rgba(0, 0, 0, 0.2);
}

#slider1:target ~ .imgContainer #img1,
#slider1:target ~ .imgContainer #button1 {
  height: 400px;
  width: 600px;
  background-color: transparent;
  filter: saturate(100%);
}

#slider2:target ~ .imgContainer #img2,
#slider2:target ~ .imgContainer #button2 {
  height: 400px;
  width: 600px;
  background-color: transparent;
  filter: saturate(100%);
}

#slider3:target ~ .imgContainer #img3,
#slider3:target ~ .imgContainer #button3 {
  height: 400px;
  width: 600px;
  background-color: transparent;
  filter: saturate(100%);
}

#slider4:target ~ .imgContainer #img4,
#slider4:target ~ .imgContainer #button4 {
  height: 400px;
  width: 600px;
  background-color: transparent;
  filter: saturate(100%);
}

#slider5:target ~ .imgContainer #img5,
#slider5:target ~ .imgContainer #button5 {
  height: 400px;
  width: 600px;
  background-color: transparent;
  filter: saturate(100%);
}

#slider6:target ~ .imgContainer #img6,
#slider6:target ~ .imgContainer #button6 {
  height: 400px;
  width: 600px;
  background-color: transparent;
  filter: saturate(100%);
}

#slider7:target ~ .imgContainer #img7,
#slider7:target ~ .imgContainer #button7 {
  height: 400px;
  width: 600px;
  background-color: transparent;
  filter: saturate(100%);
}

#slider8:target ~ .imgContainer #img8,
#slider8:target ~ .imgContainer #button8 {
  height: 400px;
  width: 600px;
  background-color: transparent;
  filter: saturate(100%);
}

#slider9:target ~ .imgContainer #img9,
#slider9:target ~ .imgContainer #button9 {
  height: 400px;
  width: 600px;
  background-color: transparent;
  filter: saturate(100%);
}

#slider10:target ~ .imgContainer #img10,
#slider10:target ~ .imgContainer #button10 {
  height: 400px;
  width: 600px;
  background-color: transparent;
  filter: saturate(100%);
}


/* #slider1:target ~ .imgContainer{
  left: 60%;
}
#slider2:target ~ .imgContainer{
  left: 50%;
}
#slider3:target ~ .imgContainer{
  left: 40%;
}
#slider4:target ~ .imgContainer{
  left: 30%;
}
#slider5:target ~ .imgContainer{
  left: 20%;
}
#slider6:target ~ .imgContainer{
  left: 10%;
}
#slider7:target ~ .imgContainer{
  left: 0%;
}
#slider8:target ~ .imgContainer{
  left: -10%;
}
#slider9:target ~ .imgContainer{
  left: -20%;
}
#slider10:target ~ .imgContainer{
  left: -30%;
} */





/* navbar #################### */

/* .navbar-nav a {
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
    
}

.join-btn ul a:hover {
    color: #212529;

} */

/* footer #################### */  

/* .followus-container {
    background-color: #212529;
    
}


.followus-col ul {
    display: flex;
    flex-direction: row;
    justify-content: center;
    text-align: center;
    margin: 20px auto;
}

.followus-col ul i {
    
    color: #fff;
    text-decoration: none;
    font-size: 30px;
    margin: 5px 20px;
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
} */

    </style>

</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
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
                        <li><a class="dropdown-item" href="#">Account</a></li>
                      </ul>
                    </li>
                  </ul>
                </button>
                </ul>
            </div>
          </div>
        </div>
      </nav> --}}

{{-- gallery ########################### --}}

<div class="container mt-5 mb-5">
    <div class="gal-row row">
        <div class="gal-col col-md-12">
            
  <span class="slider" id="slider1"></span>
  <span class="slider" id="slider2"></span>
  <span class="slider" id="slider3"></span>
  <span class="slider" id="slider4"></span>
  <span class="slider" id="slider5"></span>
  <span class="slider" id="slider6"></span>
  <span class="slider" id="slider7"></span>
  <span class="slider" id="slider8"></span>
  <span class="slider" id="slider9"></span>
  <span class="slider" id="slider10"></span>

  <div class="imgContainer">

    <div class="slide_div" id="slide_1">
      <img src="images_properties/property_A/prop_01.png" alt="" class="img"  id="img1">
      <a href="#slider1" class="button" id="button1"></a>
    </div>
    <div class="slide_div" id="slide_2">
      <img src="images_properties/property_A/prop_02.png" alt="" class="img"  id="img2">
      <a href="#slider2" class="button" id="button2"></a>
    </div>
    <div class="slide_div" id="slide_3">
      <img src="images_properties/property_A/prop_03.png" alt="" class="img"  id="img3">
      <a href="#slider3" class="button" id="button3"></a>
    </div>
    <div class="slide_div" id="slide_4">
      <img src="images_properties/property_A/prop_04.png" alt="" class="img"  id="img4">
      <a href="#slider4" class="button" id="button4"></a>
    </div>
    <div class="slide_div" id="slide_5">
      <img src="images_properties/property_A/prop_05.png" alt="" class="img" id="img5">
      <a href="#slider5" class="button" id="button5"></a>
    </div>
    <div class="slide_div" id="slide_6">
      <img src="images_properties/property_A/prop_06.png" alt="" class="img" id="img6">
      <a href="#slider6" class="button" id="button6"></a>
    </div>
    <div class="slide_div" id="slide_7">
      <img src="images_properties/property_A/prop_07.png" alt="" class="img"  id="img7">
      <a href="#slider7" class="button" id="button7"></a>
    </div>
    <div class="slide_div" id="slide_8">
      <img src="images_properties/property_A/prop_08.png" alt="" class="img-fluid"  id="img8">
      <a href="#slider8" class="button" id="button8"></a>
    </div>
    <div class="slide_div" id="slide_9">
      <img src="images_properties/property_A/prop_09.png" alt="" class="img-fluid"  id="img9">
      <a href="#slider9" class="button" id="button9"></a>
    </div>
    <div class="slide_div" id="slide_10">
      <img src="images_properties/property_A/prop_10.png" alt="" class="img-fluid"  id="img10">
      <a href="#slider10" class="button" id="button10"></a>
    </div>

  </div>

</div>
        </div>
    </div>
</div> 

{{-- slider ############################ style="width: 1200px;" height="900px" --}}



<!-- Footer  -->

{{-- <div class="followus-container container-fluid">
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

<footer class="footer pt-5 pb-2 mt-5">
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
            <li class="mb-2"><a href="careers.html">FAQs</a></li>
            <li class="mb-2"><a href="careers.html">Careers</a></li>
            <li class="mb-2"><a href="terms.html">Terms and Conditions</a></li>
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
  </footer>   --}}


<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 

<script>
  
  const imgContainer = document.querySelector('.imgContainer');
  let isDragging = false;
  let startPosition = 0;
  let currentTranslate = 0;
  let prevTranslate = 0;

  function startDrag(e) {
      if (e.type === 'touchstart') {
          startPosition = e.touches[0].clientX;
      } else {
          startPosition = e.clientX;
          isDragging = true;
      }

      imgContainer.style.cursor = 'grabbing';
  }

  function drag(e) {
      if (isDragging) {
          const currentPosition = (e.type === 'touchmove') ? e.touches[0].clientX : e.clientX;
          const diffPosition = currentPosition - startPosition;
          currentTranslate = prevTranslate + diffPosition;
          imgContainer.style.transform = `translateX(${currentTranslate}px)`;
      }
  }

  function endDrag() {
      prevTranslate = currentTranslate;
      isDragging = false;
      imgContainer.style.cursor = 'grab';
  }

  imgContainer.addEventListener('mousedown', startDrag);
  imgContainer.addEventListener('touchstart', startDrag);

  imgContainer.addEventListener('mousemove', drag);
  imgContainer.addEventListener('touchmove', drag);

  window.addEventListener('mouseup', endDrag);
  window.addEventListener('touchend', endDrag);

  // to prevent text selection during drag
  imgContainer.addEventListener('dragstart', (e) => e.preventDefault());
</script>

</body>
</html>    



{{-- bidding01 ################################################# --}}

{{-- // bidding ###################################################################### --}}

document.getElementById('bid-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get the amount value
    const bid = document.getElementById('bid').value;

    // Send an AJAX request to the Laravel route
    fetch('/bidding01', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
        },
        body: JSON.stringify({ bid: bid })
    })
    .then(response => response.json())
    .then(data => {
        // Handle successful response (e.g., display a success message)
        // console.log('Bid saved successfully!');
        window.alert('Bid saved successfully!');
    })
    .catch(error => {
        // Handle errors (e.g., display an error message)
        // console.error('Error saving bid:', error);
        window.alert('Error saving bid:', error);
    });
});



// <?php $array = array('title' => 'AuctionRS') ;?>