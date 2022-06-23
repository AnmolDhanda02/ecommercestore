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

    <title>Grocery</title>
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

     <!-- header section starts  -->

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
     echo "<script>alert('Start purchasing products because the cart is empty .');</script>";
     ?>
          <a href="checkout.php" class="fas fa-shopping-cart"></a>2
          <a href="signin.php" class="fa fa-user-plus"></a>
      </div>

  </div>

</header>

<!-- header section ends -->


    

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Get 15% discount on every product if u buy right now</strong> You can now grab the discount of <strong>15%</strong> on every single product.
        <br>
        HURRY UP!!! LIMITED TIME OFFER!!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <!-- product section starts  -->

<section class="product" id="product">

  <h1 class="heading">Grocery <span>Products</span></h1>
  <center><p>__________________________________________________________________________________________________________________________________________________________________________</p></center>

  <div class="box-container">

      <div class="box">          
          <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-share"></a>
              <a href="#" class="fas fa-eye"></a>
          </div>
          <img src="images/grocery/rusk.jpg" alt="">
          <h3>Rusk</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price"> ₹36 <span> ₹45 </span> </div>
          <div class="quantity">
              <span>quantity : </span>
              <input type="number" min="1" max="1000" value="1">              
          </div>
          <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">          
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/grocery/bread.jpg" alt="">
        <h3>Whole Wheat Brown Bread</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> ₹95 <span> ₹90 </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">              
        </div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">          
      <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/grocery/biscuit.jpg" alt="">
      <h3>Biscuits</h3>
      <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
      </div>
      <div class="price"> ₹180 <span> ₹195 </span> </div>
      <div class="quantity">
          <span>quantity : </span>
          <input type="number" min="1" max="1000" value="1">              
      </div>
      <a href="#" class="btn">add to cart</a>
  </div>

  <div class="box">          
    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
    </div>
    <img src="images/grocery/flour.jpg" alt="">
    <h3>Wheat Flour</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <div class="price"> ₹360 <span> ₹390 </span> </div>
    <div class="quantity">
        <span>quantity : </span>
        <input type="number" min="1" max="1000" value="1">              
    </div>
    <a href="#" class="btn">add to cart</a>
</div>

<div class="box">          
  <div class="icons">
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-share"></a>
      <a href="#" class="fas fa-eye"></a>
  </div>
  <img src="images/grocery/fortune.jpg" alt="">
  <h3>Fortune Refined Soyabean Oil</h3>
  <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
  </div>
  <div class="price"> ₹950 <span> ₹1000 </span> </div>
  <div class="quantity">
      <span>quantity : </span>
      <input type="number" min="1" max="1000" value="1">              
  </div>
  <a href="#" class="btn">add to cart</a>
</div>

<div class="box">          
  <div class="icons">
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-share"></a>
      <a href="#" class="fas fa-eye"></a>
  </div>
  <img src="images/grocery/rice.jpg" alt="">
  <h3>Basmati Rice</h3>
  <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
  </div>
  <div class="price"> ₹120 <span> ₹135 </span> </div>
  <div class="quantity">
      <span>quantity : </span>
      <input type="number" min="1" max="1000" value="1">              
  </div>
  <a href="#" class="btn">add to cart</a>
</div>

<div class="box">          
  <div class="icons">
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-share"></a>
      <a href="#" class="fas fa-eye"></a>
  </div>
  <img src="images/grocery/salt.jpg" alt="">
  <h3>TATA Salt</h3>
  <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
  </div>
  <div class="price"> ₹20 <span> ₹22 </span> </div>
  <div class="quantity">
      <span>quantity : </span>
      <input type="number" min="1" max="1000" value="1">              
  </div>
  <a href="#" class="btn">add to cart</a>
</div>

<div class="box">          
  <div class="icons">
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-share"></a>
      <a href="#" class="fas fa-eye"></a>
  </div>
  <img src="images/grocery/tea.jpg" alt="">
  <h3>TATA Tea Agni</h3>
  <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
  </div>
  <div class="price"> ₹69 <span> ₹70 </span> </div>
  <div class="quantity">
      <span>quantity : </span>
      <input type="number" min="1" max="1000" value="1">              
  </div>
  <a href="#" class="btn">add to cart</a>
</div>

<div class="box">          
  <div class="icons">
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-share"></a>
      <a href="#" class="fas fa-eye"></a>
  </div>
  <img src="images/grocery/soap.jpg" alt="">
  <h3>Soap</h3>
  <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
  </div>
  <div class="price"> ₹100 <span> ₹90 </span> </div>
  <div class="quantity">
      <span>quantity : </span>
      <input type="number" min="1" max="1000" value="1">              
  </div>
  <a href="#" class="btn">add to cart</a>
</div>

<div class="box">          
  <div class="icons">
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-share"></a>
      <a href="#" class="fas fa-eye"></a>
  </div>
  <img src="images/grocery/shampoo.jpg" alt="">
  <h3>Shampoo & Conditioners</h3>
  <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
  </div>
  <div class="price"> ₹519 <span> ₹530 </span> </div>
  <div class="quantity">
      <span>quantity : </span>
      <input type="number" min="1" max="1000" value="1">              
  </div>
  <a href="#" class="btn">add to cart</a>
</div>

<div class="box">          
  <div class="icons">
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-share"></a>
      <a href="#" class="fas fa-eye"></a>
  </div>
  <img src="images/grocery/surf.jpg" alt="">
  <h3>Surf Excel</h3>
  <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
  </div>
  <div class="price"> ₹340 <span> ₹390 </span> </div>
  <div class="quantity">
      <span>quantity : </span>
      <input type="number" min="1" max="1000" value="1">              
  </div>
  <a href="#" class="btn">add to cart</a>
</div>

<div class="box">          
  <div class="icons">
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-share"></a>
      <a href="#" class="fas fa-eye"></a>
  </div>
  <img src="images/grocery/rin soap.jpg" alt="">
  <h3>Rin Soap</h3>
  <div class="stars">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star-half-alt"></i>
  </div>
  <div class="price"> ₹280 <span> ₹300 </span> </div>
  <div class="quantity">
      <span>quantity : </span>
      <input type="number" min="1" max="1000" value="1">              
  </div>
  <a href="#" class="btn">add to cart</a>
</div>

</section>

<!-- product section ends -->

        <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <span class="h5">User Rating</span>
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
  <!-- Social Footer, Single Coloured -->
  <!-- Include Font Awesome Stylesheet in Header -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- // -->
   
  <script src="js/script.js"></script>

</body>
</html>

