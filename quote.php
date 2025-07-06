<?php include 'include/head.php'; ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <!-- loader -->
  <?php include 'include/loader.php'; ?>

  <?php include 'include/menu.php'; ?>

  <div class="intro-section site-blocks-cover innerpage d-flex justify-content-center align-items-center" style="background-image: url('images/home/3.webp');">
    <div class="container">
      <div class="row align-items-center text-center">
        <div class="col-lg-12 mt-5" data-aos="fade-up">
          <h1>Request A Free Qoute!</h1>
          <p class="text-white text-center">
            <a href="/">Home</a>
            <span class="mx-2">/</span>
            <span>Get A Quote</span>
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section">
    <div class="container">
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="fname">First Name</label>
            <input type="text" id="fname" class="form-control" placeholder="Enter your first name">
          </div>
          <div class="col-md-6 form-group">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" class="form-control" placeholder="Enter your last name">
          </div>
          <div class="col-md-6 form-group">
            <label for="eaddress">Email Address</label>
            <input type="text" id="eaddress" class="form-control" placeholder="Enter your email">
          </div>
          <div class="col-md-6 form-group">
            <label for="tel">Tel. Number</label>
            <input type="text" id="tel" class="form-control" placeholder="Enter your phone number">
          </div>
          <div class="col-md-12 form-group">
            <label for="freight">Select A Freight</label>
            <select class="form-control" name="freight" id="freight">
              <option value="freight1">Freight 1</option>
              <option value="freight2">Freight 2</option>
              <option value="freight3">Freight 3</option>
            </select>
          </div>
          <div class="col-md-12 form-group">
            <label for="message">Message</label>
            <textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Enter your message"></textarea>
          </div>
          <div class="col-12">
            <input type="submit" value="Send Message" class="btn-beta rounded-1 p-5">
          </div>
        </div>
    </div>
  </div>



  <!-- footer -->

  <?php include 'include/footer.php'; ?>




</body>

</html>