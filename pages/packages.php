<!doctype html>
<html>

<!-- Mirrored from html.codecafe.cc/flamenco/homepage-slider.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Sep 2016 17:32:43 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Catering Service</title>
  <link rel="stylesheet" href="../front/stylesheets/global.css">
  <script src="../front/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link rel="icon" type="image/png" href="../images/logo.png"> 
         <style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    margin-top: 5%;
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
ul{
        padding: 0;
        list-style: none;
    }
    ul li{
        display: inline-block;
        position: relative;
        line-height: 21px;
        text-align: left;
    }
    ul li a{
        display: block;
        padding: 8px 25px;
        text-decoration: none;
    }
    ul li a:hover{
    }
    ul li ul.dropdown{
        min-width: 100%; /* Set width of the dropdown */
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
		background-color: #000000;
		opacity:90%;
    }
    ul li:hover ul.dropdown{
        display: block;	/* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
</style>
</head>
<?php
	include '../databaseView/view.php';
	
	$allCuisines = array();
	$allCuisines = getFoodCuisines();
	$foodNameForCuisineMainDish = getFoodName($_GET['cuisine'], 'Main dish');
	$foodImageForCuisineMainDish = getFoodImage($_GET['cuisine'], 'Main dish');
	$foodNameForCuisineDessert = getFoodName($_GET['cuisine'], 'Dessert');
	$foodImageForCuisineDessert = getFoodImage($_GET['cuisine'], 'Dessert');
	$foodNameForCuisineSoup = getFoodName($_GET['cuisine'], 'Soup');
	$foodImageForCuisineSoup = getFoodImage($_GET['cuisine'], 'Soup');
	$foodNameForCuisineAppetizer = getFoodName($_GET['cuisine'], 'Appetizer');
	$foodImageForCuisineAppetizer = getFoodImage($_GET['cuisine'], 'Appetizer');
	$cuisine =  lcfirst($_GET['cuisine']);
	
?>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../front/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="wrapper">
    
<!--Header section start-->
<header class="top in-page">
  <div class="logo-side">
    <a href="../index.php"><img src="../images/logo.png" alt="cs"></a>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Home</a></li>
       <li>
			<a href="#">Food List</a>
            <ul class="dropdown">
			<?php
				foreach(array_unique($allCuisines) as $value){
			?>
                <li><a href="packages.php?cuisine=<?php echo $value ?>"><?php echo $value; ?></a></li>
			<?php
				}
			?>
            </ul>
		</li>
        <li id="li-logo"><a href="../index.php"><img src="../images/logo.png" alt="cs"></a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
		<li><a href="reservation.php">Reservation</a></li>
      </ul>
    </div>
  </div>
</nav>

</header>

    <!--Content section-->
    
<main>
  
<header class="page-bg" style="background-image: url('../images/packages-bg.jpg')">
  <div class="wrapper">
    <h2><?php echo $_GET['cuisine']?></h2>
  </div>
</header>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <section class="menu">
			<header>
                <h2>Appetizers</h2>
            </header>
			<?php
			$counter = 0;
			for($i=0; $i<count($foodNameForCuisineAppetizer); $i++){
				if($i == 0){
					$counter++;
					echo "
						<div class='row'>
							<div class='col-md-4'>
								<center>
								<h3>$foodNameForCuisineAppetizer[$i]</h3>
								<img src = '../images/menu/$cuisine/appetizers/$foodImageForCuisineAppetizer[$i]' width='275px' height='250px'>
								</center>
							</div>";
				}
				else if($counter == 2){
					$counter = 0;
					echo "
						<div class='col-md-4'>
							<center>
								<h3>$foodNameForCuisineAppetizer[$i]</h3>
								<img src = '../images/menu/$cuisine/appetizers/$foodImageForCuisineAppetizer[$i]' width='275px' height='250px'>
							</center>
						</div>
					</div>
					<div class='row'>
					";
				}
				else{
					$counter++;
					echo "
						<div class='col-md-4'>
							<center>
								<h3>$foodNameForCuisineAppetizer[$i]</h3>
								<img src = '../images/menu/$cuisine/appetizers/$foodImageForCuisineAppetizer[$i]' width='275px' height='250px'>
							</center>
						</div>
					";
				}
			}
			?>
        </section>
		<section class="menu">
			<header>
			<h2>Main Dish</h2><br>
			</header>
			<?php
			$counter = 0;
			for($i=0; $i<count($foodNameForCuisineMainDish); $i++){
				if($i == 0){
					$counter++;
					echo "
						<div class='row'>
							<div class='bottom-align-text col-md-4'>
								<center>
								<h3>$foodNameForCuisineMainDish[$i]</h3>
								<img src = '../images/menu/$cuisine/mainDish/$foodImageForCuisineMainDish[$i]' width='275px' height='250px'><br>
								</center>
							</div>";
				}
				else if($counter == 2){
					$counter = 0;
					echo "
						<div class='bottom-align-text col-md-4'>
							<center>
								<h3>$foodNameForCuisineMainDish[$i]</h3>
								<img src = '../images/menu/$cuisine/mainDish/$foodImageForCuisineMainDish[$i]' width='275px' height='250px'><br>
							</center>
						</div>
					</div>
					<div class='row'>
					";
				}
				else{
					$counter++;
					echo "
						<div class='bottom-align-text col-md-4'>
							<center>
								<h3>$foodNameForCuisineMainDish[$i]</h3>
								<img src = '../images/menu/$cuisine/mainDish/$foodImageForCuisineMainDish[$i]' width='275px' height='250px'><br>
							</center>
						</div>
					";
				}
			}
			?>
        </section>
		<section class="menu">
			<header>
			<h2>Soup</h2><br>
			</header>
			<?php
			$counter = 0;
			for($i=0; $i<count($foodNameForCuisineSoup); $i++){
				if($i == 0){
					$counter++;
					echo "
						<div class='row'>
							<div class='bottom-align-text col-md-4'>
								<center>
								<h3>$foodNameForCuisineSoup[$i]</h3>
								<img src = '../images/menu/$cuisine/soups/$foodImageForCuisineSoup[$i]' width='275px' height='250px'><br>
								</center>
							</div>";
				}
				else if($counter == 2){
					$counter = 0;
					echo "
						<div class='bottom-align-text col-md-4'>
							<center>
								<h3>$foodNameForCuisineSoup[$i]</h3>
								<img src = '../images/menu/$cuisine/soups/$foodImageForCuisineSoup[$i]' width='275px' height='250px'><br>
							</center>
						</div>
					</div>
					<div class='row'>
					";
				}
				else{
					$counter++;
					echo "
						<div class='bottom-align-text col-md-4'>
							<center>
								<h3>$foodNameForCuisineSoup[$i]</h3>
								<img src = '../images/menu/$cuisine/soups/$foodImageForCuisineSoup[$i]' width='275px' height='250px'><br>
							</center>
						</div>
					";
				}
			}
			?>
        </section>
		<section class="menu">
			<header>
			<h2>Dessert</h2><br>
			</header>
			<?php
			$counter = 0;
			for($i=0; $i<count($foodNameForCuisineDessert); $i++){
				if($i == 0){
					$counter++;
					echo "
						<div class='row'>
							<div class='bottom-align-text col-md-4'>
								<center>
								<h3>$foodNameForCuisineDessert[$i]</h3>
								<img src = '../images/menu/$cuisine/Desserts/$foodImageForCuisineDessert[$i]' width='275px' height='250px'><br>
								</center>
							</div>";
				}
				else if($counter == 2){
					$counter = 0;
					echo "
						<div class='bottom-align-text col-md-4'>
							<center>
								<h3>$foodNameForCuisineDessert[$i]</h3>
								<img src = '../images/menu/$cuisine/Desserts/$foodImageForCuisineDessert[$i]' width='275px' height='250px'><br>
							</center>
						</div>
					</div>
					<div class='row'>
					";
				}
				else{
					$counter++;
					echo "
						<div class='bottom-align-text col-md-4'>
							<center>
								<h3>$foodNameForCuisineDessert[$i]</h3>
								<img src = '../images/menu/$cuisine/Desserts/$foodImageForCuisineDessert[$i]' width='275px' height='250px'><br>
							</center>
						</div>
					";
				}
			}
			?>
        </section>
      </div>
    </div>
  </div>
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">×</span>
    <p>You need to login first before you can create reservation</p><hr>
	<a href="pages/login.php">Login</a><br>
    <a href="pages/signup.php">Register</a>
  </div>

</div>
</main>

 <footer>
  <div class="container">
    <div class="logo-side">
    <a href="index-2.html"><img src="../images/logo.png" alt="cs"></a>
</div>
    <div class="row">
      <div class="col-lg-12">
        <p>Catering Service<br /></p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="social-links">
          <li><a href="#"><i class="icon -facebook"></i></a></li>
          <li><a href="#"><i class="icon -twitter"></i></a></li>
          <li><a href="#"><i class="icon -google"></i></a></li>
          <li><a href="#"><i class="icon -instagram"></i></a></li>
          <li><a href="#"><i class="icon -vimeo"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div id="instagramSide" class="instagram-section"></div>
      </div>
    </div>

 
    <div class="row">
      <div class="col-lg-12">
        <p class="copyright">&copy; Catering Service 2020</p>
      </div>
    </div>
  </div>
</footer>

  </div>


  <!--Import jQuery library ---->
  <script src="../front/js/jquery.js"></script>
  <script>window.jQuery || document.write('<script src="../front/js/vendor/jquery-1.11.2.js"><\/script>')</script>
  <script src="../front/js/vendor/bootstrap.min.js" type="text/javascript"></script>
  <script src="../front/js/vendor/jasny-bootstrap.min.js" type="text/javascript"></script>
  <script src="../front/js/vendor/instafeed.min.js" type="text/javascript"></script>
  <script src="../front/js/vendor/isotope.pkgd.min.js" type="text/javascript"></script>
  <script src="../front/js/vendor/flickity.pkgd.min.js" type="text/javascript"></script>
  <script src="../front/js/vendor/jquery.validate.min.js" type="text/javascript"></script>
  <script src="../front/js/main.js" type="text/javascript"></script>
  <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>

<!-- Mirrored from html.codecafe.cc/flamenco/homepage-slider.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Sep 2016 17:32:49 GMT -->
</html>
