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

<!-- contact-content  -->
<div class="contact-con container mt-5 pt-5 mb-5">
    <div class="contact-row row">
        <div class="contact-col col-md-12">
            <h3>Thank you for contacting AuctionRS</h3>
            <p>Using the form below, please provide as much detailed information as possible. The information you submit may be shared with our independently owned and operated franchisee so that your concerns can be addressed.Please note that by providing your phone number and email address, you are providing consent for us to reach out to you via this method.</p>
        </div>
    </div>
</div>

<!-- form-section  -->
<div class="contact-con container mb-5 pb-5">
    <div class="contact-row row">
        <div class="contact-col col-md-12">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                  <div class="invalid-feedback">
                    Please provide your First Name.
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationCustom02" value="" required>
                  <div class="invalid-feedback">
                    Please provide your Last Name.
                  </div>
                </div>
                <div class="col-md-5">
                    <label for="validationCustom03" class="form-label">Email</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                      Please provide a valid Email.
                    </div>
                </div>
                <div class="col-md-5">
                  <label for="validationCustom03" class="form-label">Address</label>
                  <input type="text" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid Address.
                  </div>
                </div>
                
                <div class="col-md-2">
                  <label for="validationCustom05" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="validationCustom05" required>
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
                
                <div class="col-12"> 
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here"  style="height: 100px" id="validationCustom05" required></textarea>
                    <label for="floatingTextarea2">Message</label>
                    <div class="invalid-feedback">
                        Please provide a message.
                    </div>
                </div>
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <div class="form-btn col-12">
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>
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


<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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

</body>
</html>    