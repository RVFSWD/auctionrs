<div class="bidding1-section mt-5 mb-5 pb-5 shadow-lg">
    <div class="container">
      <div class="row">
          <div class="about-image col-md-6 gy-5">
              <img class="img-fluid" style="width: 550px;" height="300px" src="images_properties/property_A/prop_01.png" alt="">
            </div>  
        <div class="col-md-6 align-self-center  gy-5">
          <h4>Bidding closes - Feb 29, 2024 | 9:00 PM </h4>
          <h4>Starting Bid - P21,500,000 - P25,500,000</h4>
        <form action="/create-bid" method="POST" id="bid-form" class="row g-3 needs-validation" novalidate>
            @csrf
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="User Name" name="user_name" required>
                <div class="invalid-feedback">
                    Please provide an amount.
                </div>
            </div> 
              <div class="col-md-12">
                  <input type="number" class="form-control" placeholder="Amount" name="bid" required>
                  <div class="invalid-feedback">
                      Please provide an amount.
                  </div>
              </div> 
        </form>
          <button class="bid-btn btn btn-danger" type="submit">Place your Bid</button>
        </div>
      </div>
    </div>
</div>