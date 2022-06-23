<!--Anmol Di All in One Shop
General Store & Stationery
-->

<html>
<head>
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    href="#"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<title>Create Account</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/adminlogin.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
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
	echo "<script>alert('Login here to your account .');</script>";
	?>
		<a href="checkout.php" class="fas fa-shopping-cart"></a>2
		<a href="signin.php" class="fa fa-user-plus"></a>
	</div>

</div>

</header>


<h1 class="heading"> <span>USER</span> LOGIN </h1>
	<div class="container">		
	<img src="images/contact/admin.jpg">	
		<form>		
			<div class="form-input">
				<input type="text" name="text" placeholder="Username"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>		    
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
            <input type="submit" type="submit" value="REGISTER" class="btn-login"/>		
		</form>
	</div>
</body>
</html>