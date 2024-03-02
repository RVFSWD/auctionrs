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
      
      /* navbar #################### */
      
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
      
      /* formhead-con ########################## */
      
      .formhead-con h3 {
          display: flex;
          flex-direction: row;
          align-items: center;
          text-align: center;
          justify-content: center;
          font-size: 25px;
          margin: 15px 40px;
          color: #212529;
      }
      
      /* form ################################# */
      
      .form-con {
        background-color: #fff;
        width: 80%;
        padding: 20px 40px;
        border-radius: 10px;
      }
      
      .form-col {
        margin: 50px auto 60px;
      }
      
      .form-con input {
          border-color: #212529;
      }
      
      .form-con select {
        border-color: #212529;
      }
      
      .form-floating textarea {
          border-color: #212529;
      }
      
      .form-btn a {
          color: #fff;
          text-decoration: none;
          
      }
      
      /* about-image ######################### */
      
      .about-image img {
        border-radius: 10px;
        margin: 0px auto;
      }
      
      /* bidding 1 ########################### */

      .bidding1-section {
        margin: 60px auto 30px;
        background-color: #fff;
        width: 80%;
        padding: 8px 20px;
        border-radius: 10px;
      }
      
      .bidding1-section h4 {
          color: black;
          font-size: 20px;
          font-weight: 400;
          padding-bottom: 25px;
          margin: 2px 20px;
      }
      
      .bidding1-section input {
          margin: 15px 20px 0px;
          border-color: black;
          border-radius: 5px;
          width: 200px;
          height: 49px;
      }
      
   
      
      /* new button ######################### */
      
      .bid-btn {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        position: relative;
        background-color: #dc3545;
        border-radius: 5px;
        box-shadow: rgb(121, 18, 55) 0px 4px 0px 0px;
        padding: 10px;
        margin: 30px 28px 0px;
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
      
      .bid-btn::before {
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
      
      .bid-btn:hover::before {
        width: 100%;
      }
      
      .bidding1-section a {
          text-decoration: none;
      }
      
      /* address ################### */
      
      .address-con h4 {
          color: black;
          font-size: 17px;
          font-weight: 400;
          padding-bottom: 10px;
          margin: 2px auto; 
      }
      
      /* details ################### */
      
      .details-con h3 {
          color: black;
          font-size: 25px;
          font-weight: 500;
          padding-bottom: 10px;
          margin: 15px auto;
      }
      
      .details-con p {
          color: black;
          font-size: 17px;
          font-weight: 400;
          padding-bottom: 25px;
          margin: 2px auto; 
      }
      
      /* condition ################### */
      
      .condition-con h4 {
          color: black;
          font-size: 17px;
          font-weight: 400;
          padding-bottom: 10px;
          margin: 2px auto; 
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
          color: #212529;
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

<!-- bidding 1 ######################  -->

    <div class="bidding1-section mt-5 mb-5 pb-5 shadow-lg">
      <div class="bidding1-container container">
        <div class="row">
            <div class="about-image col-md-6 gy-5">
                <img class="img-fluid" style="width: 550px;" height="300px" src="images_properties/property_A/prop_01.png" alt="">
              </div>  
          <div class="col-md-6 align-self-center  gy-5">
            <h4>Bidding closes - Feb 29, 2024 | 9:00 PM </h4>
            <h4>Starting Bid - P21,500,000 - P25,500,000</h4>
          <form action="/bidding01" method="POST" class="row g-3 needs-validation" novalidate>
              @csrf
              <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="User Name" name="user_name" required>
                  <div class="invalid-feedback">
                      Please provide a User Name.
                  </div>
              </div> 
                <div class="col-md-12">
                    <input type="number" class="form-control" placeholder="Amount" name="bid" required>
                    <div class="invalid-feedback">
                        Please provide an amount.
                    </div>
                </div>
                <button class="bid-btn btn btn-danger" type="submit">Place your Bid</button> 
          </form>
          </div>
        </div>
      </div>
  </div>
  
  <!-- address-section ######## -->

  <div class="address-con container mt-5 pt-5">
    <div class="address-row row">
        <div class="col-md-12">
            <h4>3817 Palisades Lane</h4>
            <h4>South Garden, Ayala Alabang PH</h4>
            <h4>Property of Cadiz Family</h4>
        </div>
    </div>
  </div>

<!-- lot details ############ -->

<div class="details-con container">
    <div class="details-row row">
        <div class="col-md-12">
            <h3>Lot Details</h3>
            <p>This property is available for site visit and can be viewed upon appointment. Please contact rachelzane@auctionrs.com for further details.</p>
        </div>
    </div>
</div>

<!-- conditon-section ######## -->

<div class="condition-con container mb-5 pb-5">
    <div class="condition-row row">
        <div class="col-md-12">
            <h4>Condition Report</h4>
            <h4>Newly develop property</h4>
        </div>
    </div>
</div>

<!-- Footer  -->

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
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'
    
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')
    
      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
    
          form.classList.add('was-validated')
        }, false)
      })
    })()
</script>  

{{-- <script src="js/script.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> 