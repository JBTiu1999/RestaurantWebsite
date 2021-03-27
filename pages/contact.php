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
        <li id="li-logo"><a href="../index.php"><img src="../images/logo.png" alt="flamenco"></a></li>
        <li><a href="about.php">About</a></li>
        <li  class="active" ><a href="contact.php">Contact</a></li>
         <li><a href="reservation.php">Reservation</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>

    <!--Content section-->
    
<main>
  
<header class="page-bg" style="background-image: url('../images/contact-bg.jpg')">
  <div class="wrapper">
    <h2>contact</h2>
  </div>
</header>

  <div class="container contact">
    <div class="row">
      <section class="col-md-12">
        <header class="text-center">
          <h2>Customer Feedbacks</h2>
        </header>
        <div class="row">
          <div class="col-md-5">
            <ul class="contact-data">
              <li><i class="icon -location-pin"></i>Somewhere</li>
              <li><i class="icon -mobile"></i>+63 123456789</li>
              <li><i class="icon -mail"></i> catergo@gmail.com</li>
            </ul>
            <h4>OFFICE HOURS</h4>
            <div class="row">
              <div class="col-md-4">
                <p>Monday to Friday<br />2 pm - 11 pm</p>
              </div>
              <div class="col-md-8">
                <p>Saturday and Sunday<br />1 pm - 12 pm</p>
              </div>
            </div>
            <hr />
            <ul class="social-links">
              <li><a href="#" class="icon -facebook"></a></li>
              <li><a href="#" class="icon -twitter"></a></li>
              <li><a href="#" class="icon -google"></a></li>
              <li><a href="#" class="icon -instagram"></a></li>
              <li><a href="#" class="icon -vimeo"></a></li>
            </ul>
          </div>
          <div class="col-md-6 col-md-offset-1">
            <form id="contactForm" method="POST" action="send_message.php">
              <div class="form-group">
                <input type="text" name="sender_name" id="name" placeholder="name">
              </div>
          
              <div class="form-group">
                <input type="text" name="sender_email" id="email" placeholder="email">
              </div>
                  <div class="form-group">
                <input type="text" name="subject" id="phone" placeholder="subject">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" placeholder="message"></textarea>
              </div>
              <div class="form-group">
                <button class="btn-purple btn-full" type="submit">Submit</button>
              </div>
              <div class="respond"></div>
            </form>
          </div>
        </div>
      </section>
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
    <a href="index-2.html"><img src="../images/logo.png" alt="Flamenco"></a>
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
        <p class="copyright">&copy; Geancy Food 2016</p>
      </div>
    </div>
  </div>
</footer>

  </div>

  <script src="javascripts/shared.js"></script>
  <script src="javascripts/app.js"></script>
  
<script type="text/javascript">
  function initMap() {
    var myLatLng = {lat:  10.6407389, lng:  122.96895649999999};

    var styleArray = [
      {
        featureType: "all",
        stylers: [
          { saturation: -10 }
        ]
      },{
        featureType: "road.arterial",
        elementType: "geometry",
        stylers: [
          { hue: "#cdcdcd" },
          { saturation: 60 }
        ]
      },{
        featureType: "poi.business",
        elementType: "labels",
        stylers: [
          { visibility: "off" }
        ]
      }
    ];

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      scrollwheel: false,
      disableDefaultUI: true, // a way to quickly hide all controls
      mapTypeControl: true,
      zoomControl: false,
      styles: styleArray,
      zoom: 17
    });

    // Create a marker and set its position.
    var marker = new google.maps.Marker({
      map: map,
      position: myLatLng,
      title: 'Geancy'
    });
  }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7ylEGXi0QoGQGlBKjLc8TTYwbMK9Wq2k&amp;callback=initMap">
</script>

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
