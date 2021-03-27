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
?>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../front/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="wrapper">
    
<!--Header section start-->
<header class="top in-page">
  <div class="logo-side">
    <a href="../index.php"><img src="../images/geancy_logo.png" alt="Flamenco"></a>
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
        <li class="active"><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="reservation.php">Reservation</a></li>
      </ul>
    </div>
  </div>
</nav>

</header>


    <!--Content section-->
    
<main>
 
<header class="page-bg" style="background-image: url('../images/about-bg.jpg')">
  <div class="wrapper">
    <h2>About Us</h2>
  </div>
</header>

  <div class="container about">
    <div class="row">
      <section class="col-lg-12">
        <header>
          <h2>Catering Service</h2>
        </header>
        <article>
          <div class="row">
            <div class="col-md-5 content">
              <p><strong>About Us</strong></p>
              <p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Amet facilisis magna etiam tempor orci eu lobortis. Et ligula ullamcorper malesuada proin libero nunc consequat interdum varius. 
				Congue quisque egestas diam in arcu cursus. Fusce id velit ut tortor pretium viverra suspendisse potenti. Ipsum faucibus vitae aliquet
				nec. Lectus sit amet est placerat in egestas erat imperdiet sed. Curabitur vitae nunc sed velit dignissim sodales. Nisi lacus sed viverra 
				tellus in hac habitasse platea. Magnis dis parturient montes nascetur. Enim nunc faucibus a pellentesque sit amet porttitor. Sit amet luctus 
				venenatis lectus.
			  </p>
            </div>
            <div class="col-md-6 col-md-offset-1">
              <div class="moto text-center">
               <h4>Information</h4>
               <p>Contact #: +63 123456789</p>
			   <p>Head Chef: Darryll Bustillos</p>
			   <p>Website Developer: Jemarson Tiu</p>
			   <p>Marketing Head: Stefano Edic</p>
               <p>Email Address: catergo@gmail.com</p>
              </div>
            </div>
          </div>
        </article>

      </section>
    </div>
	<div class="row">
      <section class="col-lg-12">
        <header>
          <h2>Who to know</h2>
        </header>
        <article>
          <div class="row">
            <div class="col-md-4">
              <div class="moto text-center" style="padding: 0px;"><br>
               <h4>Head Chef</h4><br>
               <center><img src="../images/profile/bustillos.jpg" width="300px" height="350px"></center><br>
			   <p>Darryll D'wayne C. Bustillos</p>
			   <p>Contact #: +63 123456789</p>
               <p>Email Address: xxxxxx@gmail.com</p><br>
			   <p align="justify" style="padding-left: 25px; padding-right: 25px">
					Darryll D’wayne Bustillos is a well-known chef internationally, has been involved with the food industry for several years. 
					After pursuing his master’s degree in Culinary Arts in 2008, Darryll opened his first restaurant locally in 2011, his second in 2015 in Japan 
					and continually expands all across the globe. Oftenly praised for the quality of the food in his menu, Darryll has attained a specialty in cooking 
					for different varieties of food cuisines ranging from Asia to Western countries.
				</p><br>
              </div>
            </div>
			<div class="col-md-4">
              <div class="moto text-center" style="padding: 0px;"><br>
               <h4>Marketing Head</h4><br>
               <center><img src="../images/profile/edic.jpg" width="300px" height="350px"></center><br>
			   <p>Stefano Jose B. Edic</p>
			   <p>Contact #: +63 123456789</p>
               <p>Email Address: xxxxxx@gmail.com</p><br>
			   <p align="justify" style="padding-left: 25px; padding-right: 25px">
					Stefano Edic is a famous food critic and content creator of a widely recognized food blog. 
					He started humble beginnings as a contributing writer on Manila Bulletin after seizing his master’s 
					degree in Journalism. After two years of perfecting his craft, he was hired as a freelance contributor in said online food blog.
				</p><br>
              </div>
            </div>
			<div class="col-md-4">
              <div class="moto text-center" style="padding: 0px;"><br>
               <h4>Website Developer </h4><br>
               <center><img src="../images/profile/tiu.jpg" width="300px" height="350px"></center><br>
			   <p>Jemarson B. Tiu</p>
			   <p>Contact #: +63 123456789</p>
               <p>Email Address: xxxxxx@gmail.com</p><br>
			   <p align="justify" style="padding-left: 25px; padding-right: 25px">
					Jemarson Tiu is a freelance web developer who graduated with a master’s degree in Web Development. 
					With years of experience in the said field, he participated in numerous web development projects and competitions.
				</p><br>
              </div>
            </div>
          </div>
        </article>

      </section>
    </div>
  </div>
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">×</span>
    <p>You need to register first before you can create reservation</p><hr>
    <a href="signup.php">Signup here!</a>
  </div>

</div>
</main>
    <!--Footer section-->
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
        <p class="copyright">&copy;Catering Service 2020</p>
      </div>
    </div>
  </div>
</footer>

  </div>

  
 <!--Import jQuery library ---->
<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
<script src="js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="js/vendor/jasny-bootstrap.min.js" type="text/javascript"></script>
<script src="js/vendor/instafeed.min.js" type="text/javascript"></script>
<script src="js/vendor/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="js/vendor/flickity.pkgd.min.js" type="text/javascript"></script>
<script src="js/vendor/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
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

<!-- Mirrored from html.codecafe.cc/flamenco/offers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Sep 2016 17:34:33 GMT -->
</html>
