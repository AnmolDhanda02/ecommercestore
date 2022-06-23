<!--Anmol Di All in One Shop
General Store & Stationery
-->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    href="#"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
    </style>
</head>

<body>
      
    <!--our code starts from here-->

    <header>

      <div class="header-1">
    
          <a href="signup.php" class="logo"><i class="fas fa-shopping-basket"></i>Anmol Di All In One Shop</a>
    
          <form action="" class="search-box-container">
              <input type="search" id="search-box" placeholder="search here...">
              <label for="search-box" class="fas fa-search"></label>
          </form>
    
      </div>
    
      <div class="header-2">
    
          <div id="menu-bar" class="fas fa-bars"></div>
    
          <nav class="navbar">
              <li class="navbar">
                <li class="nav-item">
                  <a class="nav-link" href="index.php"><b>Home</b></a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown toggle" href="#" id="navbardropdown" role="button"
          data-bs-toggle="dropdown" aria-expanded="false">
          <b>Categories</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="grocery.php"><b>Grocery</b></a></li>
            <li>
    <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="stationery.php"><b>Stationery</b></a></li>
            <li>
            </ul>
            </li>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="services.php"><b>Services</b></a>
    
            </li>
    
            <li class="nav-item">
            <a class="nav-link" href="about us.php"><b>About Us</b></a>
    
            </li>
                    
            <li class="nav-item">
            <a class="nav-link" href="contactus.php"><b>Contact Us</b></a>
    
            </li>
    
            </ul>
            </ul>
          </li>
                </li>
    
              </li>
          </nav>
    
          <div class="icons">
          <?php
          echo "<script>alert('Thanks for dealing with us but visit again .');</script>";
          ?>
              <a href="checkout.php" class="fas fa-shopping-cart"></a>2
              <a href="signin.php" class="fa fa-user-plus"></a>
          </div>
    
      </div>
    
    </header>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Get 15% discount on every product if u buy right now</strong> You can now grab the discount of <strong>15%</strong> on every single product.
      <br>
      HURRY UP!!! LIMITED TIME OFFER!!!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<h1 class="heading"> <span>Important</span> Contacts </h1>

<center>
<div class="row">
  <div class="column">
    <img src="images/contact/contact.jpg" alt="Snow" style="width: 100px;">
    <H3>Contact No.</H3>
    <P>0161-975482</P>
  </div>
  <div class="column">
    <img src="images/contact/mail.jpg" alt="Forest" style="width: 100px;">
    <H3>Mail</H3>
    <P><a href="mailto:devil39@gmail.com">devil39@gmail.com</a></P>
  </div>
  <div class="column">
    <img src="images/contact/address.png" alt="Mountains" style="width: 100px;">
    <H3>Address</H3>
    <P>Ludhiana, Punjab India - 141001</P>
  </div>
</div>
</center>
  <h1>LOCATION</h1>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3422.8193490091467!2d75.81658301446656!3d30.919673283651242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a83eff416fd67%3A0xe7e1234fedeaa45!2sBhuri%20wala%20Gurudwara%20Sahib!5e0!3m2!1sen!2sin!4v1646468562808!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<!-- Feedback Form -->
<div class="container-fluid feed-feedback-img">
    <div class="overlay">
    <div class="container bottopmargform">
      <div class="row">
        <form method="post" action="insert.php" class="feed-feedback col-12">
          <h1 class="text-center">
            <u><spans class="headev">Feedback</spans></u>
          </h1>
          <p class="text-center"></p>
          <div class="row">
            <div class="form-group col-md-6">
              <!-- <label for="name">Your Name *</label> -->
              <div class="d-flex feed-input">
                <i class="fa fa-user align-self-center"></i>
                <input class="form-control" type="text" name="name" placeholder="Your Name" id="feedbackName" data-toggle="tooltip" data-placement="top" title="" onfocus="disableTooltipFeedback()" data-original-title="Please Enter Your Name">
              </div>
            </div>
            <div class="form-group col-md-6">
              <!-- <label for="name">Your Name *</label> -->
              <div class="d-flex feed-input">
                <i class="fa fa-envelope align-self-center"></i>
                <input class="form-control" type="text" name="email" placeholder="Your Email" id="feedbackEmail" data-toggle="tooltip" data-placement="top" title="" onfocus="disableTooltipFeedback()" data-original-title="Please Enter a Valid Email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <!-- <label for="name">Your Name *</label> -->
              <div class="d-flex feed-input">
                <i class="fa fa-phone align-self-center"></i>
                <input class="form-control" type="text" name="number" placeholder="Your Phone No." id="feedbackPhno" data-toggle="tooltip" data-placement="top" title="" onfocus="disableTooltipFeedback()" data-original-title="Please Enter a Valid Phone Number">
              </div>
            </div>
            <div class="form-group col-md-6">
              <!-- <label for="name">Your Name *</label> -->
              <div class="d-flex feed-input">
                <i class="fa fa-info-circle align-self-center"></i>
                <input class="form-control" type="text" name="subject" placeholder="Subject" id="feedbackSubject" data-toggle="tooltip" data-placement="top" title="" onfocus="disableTooltipFeedback()" data-original-title="Please Enter Subject of your concern">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <!-- <label for="name">Your Name *</label> -->
              <div class="d-flex feed-input">
                <i class="fa fa-pen align-self-center"></i>
                <textarea class="form-control" rows="6" name="feedback" placeholder="Your Feedback" id="feedbackText" data-toggle="tooltip" data-placement="top" title="" onfocus="disableTooltipFeedback()" data-original-title="Please Enter your Feedback"></textarea>
              </div>
            </div>
            <div class="form-group col-md-12">
              <button class="btn btn-dark form-sub" style="width:100%;" type="submit" name="feedsub" onclick="return validFeedback();">Send us your message!</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
  </div>
  
  <!-- Feedback Form End -->
  <div class="container mt-3">
    <hr>
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<span class="h3">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

</div>

    <!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <div class="container">
    <ul class="foote_bottom_ul_amrc">
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Categories</a></li>
    <li><a href="grocery.php">Grocery</a></li>
    <li><a href="stationery.php">Stationery</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="about us.php">About Us</a></li>
    <li><a href="contactus.php">Contact</a></li>
    </ul>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <a href="https://www.instagram.com/dhanda_anmol02" target="blank">
  <i class="fa fa-instagram w3-hover-opacity"></i>
  </a>
  <i class="fa fa-gmail w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>    
  <i class="fa fa-whatsapp w3-hover-opacity"></i>
  <p class="w3-medium">
    <div class="container mt-4">
      <div class="container mt-4">
        <hr />
            <div class="text-center center-block">
                <p class="txt-railway"><bold>Copyright</bold><sup>TM</sup> | Anmol Di All in One Shop</p>
                     
    </div>
        <hr />
    
</footer>
  
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
   crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
-->

<script src="js/script.js"></script>

</body>

</html>

