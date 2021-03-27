<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!doctype html>
<html>


<!-- Mirrored from html.codecafe.cc/flamenco/homepage-slider.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Sep 2016 17:32:43 GMT -->
<head>
<style>
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
	label {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .4rem 0;
}
.select-css {
    display: block;
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 700;
    color: #444;
    line-height: 1.3;
    padding: .6em 1.4em .5em .8em;
    width: 100%;
    max-width: 100%; 
    box-sizing: border-box;
    margin: 0;
    border: 1px solid #aaa;
    box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
    border-radius: .5em;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;
    background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
      linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
    background-repeat: no-repeat, repeat;
    background-position: right .7em top 50%, 0 0;
    background-size: .65em auto, 100%;
}
.select-css::-ms-expand {
    display: none;
}
.select-css:hover {
    border-color: #888;
}
.select-css:focus {
    border-color: #aaa;
    box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
    box-shadow: 0 0 0 3px -moz-mac-focusring;
    color: #222; 
    outline: none;
}
.select-css option {
    font-weight:normal;
}



body {
  padding: 3rem;
}
	</style>
	<script>
	function submitted(){
		alert("Order Submitted!");
		location.reload();
	}
	function ShowHideDiv() {
		var main = document.getElementById("main");
		var orders = document.getElementById("orders");
        var cuisine = document.getElementById("cuisineOrder").value;
		var show = document.getElementById(cuisine);
		main.style.display="none";
		orders.style.display="block";
		show.style.display="block";
    }
	$(document).ready(function() {
    $('body').bootstrapMaterialDesign();
    
      $('.datetimepicker').datetimepicker({
           icons: {
               time: "fa fa-clock-o",
               date: "fa fa-calendar",
               up: "fa fa-chevron-up",
               down: "fa fa-chevron-down",
               previous: 'fa fa-chevron-left',
               next: 'fa fa-chevron-right',
               today: 'fa fa-screenshot',
               clear: 'fa fa-trash',
               close: 'fa fa-remove'
           }
        });

        $('.datepicker').datetimepicker({
           format: 'MM/DD/YYYY',
           icons: {
               time: "fa fa-clock-o",
               date: "fa fa-calendar",
               up: "fa fa-chevron-up",
               down: "fa fa-chevron-down",
               previous: 'fa fa-chevron-left',
               next: 'fa fa-chevron-right',
               today: 'fa fa-screenshot',
               clear: 'fa fa-trash',
               close: 'fa fa-remove'
           }
        });

        $('.timepicker').datetimepicker({
//          format: 'H:mm',    // use this format if you want the 24hours timepicker
           format: 'h:mm A',    //use this format if you want the 12hours timpiecker with AM/PM toggle
           icons: {
               time: "fa fa-clock-o",
               date: "fa fa-calendar",
               up: "fa fa-chevron-up",
               down: "fa fa-chevron-down",
               previous: 'fa fa-chevron-left',
               next: 'fa fa-chevron-right',
               today: 'fa fa-screenshot',
               clear: 'fa fa-trash',
               close: 'fa fa-remove'

           }
        });
});
	</script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Catering Service</title>
  <link rel="stylesheet" href="../front/stylesheets/global.css">
  <script src="../front/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link rel="icon" type="image/png" href="../images/logo.png"> 
	
</head>
<?php
	include '../databaseView/view.php';
	
	$allCuisines = array();
	$allFoodTypes = array();
	$allCuisines = getFoodCuisines();
	$allFoodTypes = getFoodType();
	$uniqueCuisines = array();
	foreach(array_unique($allCuisines) as $value){
		array_push($uniqueCuisines, $value);
	}
?>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../front/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="wrapper">
    
<!--Header section start-->
<header class="top in-page">
  <div class="logo-side">
    <a href="../index.php"><img src="../images/logo.png" alt=""></a>
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
        <li><a href="contact.php">Contact</a></li>
		<li   class="active"> <a href="reservation.php">Reservation</a></li>
      </ul>
    </div>
  </div>
</nav>

</header>


    <!--Content section-->
    
<main>
  
<header class="page-bg" style="background-image: url('../images/reservation-bg.jpg')">
</header>

  <!--Reservation block-->
<div class="container" id="main">
 <div class="row">
   <div class="col-lg-10 col-lg-offset-1">
     <section class="reservation">
       <header>
         <h2>COME AND ENJOY THE<br>HOSPITALITY & FOOD</h2>
         <p>Please make your reservations three (3) weeks before the event<br><p>for us to make necessary preparations and provide you a high quality service.</p>
       </header>
       <article>
         <form id="reservationForm" method="post" action="#">
           <div class="form-group">
             <div class="row">
				<div class="col-md-2 col-sm-2">
                  <h3>Name</h3>
				</div>
               <div class="col-md-10 col-sm-10">
                 <input type="text" placeholder="Enter your name..." name="name" id="name">
               </div>
			 </div>
			 <br>
			<div class="row">
				<div class="col-md-2 col-sm-2">
                  <h3>E-mail</h3>
				</div>
               <div class="col-md-10 col-sm-10">
                 <input type="text" placeholder="Enter your e-mail..." name="name" id="name">
               </div>
			 </div>
			 <br>
			 <div class="row">
				<div class="col-md-2 col-sm-2">
                  <h3>Event Address</h3>
				</div>
               <div class="col-md-10 col-sm-10">
                 <input type="text" placeholder="Enter address..." name="name" id="name">
               </div>
			 </div>
			 <div class="row">
				<div class="col-md-2 col-sm-2">
                  <h3>Contact Number</h3>
				</div>
               <div class="col-md-10 col-sm-10">
                 <input type="text" placeholder="Enter your contact number..." name="name" id="name">
               </div>
			 </div>
			 <div class="row">
				<div class="col-md-2 col-sm-2">
                  <h3>Date</h3>
				</div>
               <div class="col-md-4 col-sm-4">
                 <input type="text" class="form-control datepicker">
               </div>
				<div class="col-md-2 col-sm-2">
                  <h3>Time</h3>
				</div>
               <div class="col-md-4 col-sm-4">
                 <input type="text" class="form-control timepicker">
               </div>
			 </div>
			 <div class="row">
				<div class="col-md-2 col-sm-2">
					<h3>Cuisine Type</h3>
				</div>
				<div class="col-md-4 col-sm-4">
				<select id="cuisineOrder" class="select-css">
					<?php
						foreach($uniqueCuisines as $value){
							echo "
								<option value='$value'>$value</option>
							";
						}
					?>
				</select>
				</div>
				<div class="row">
				<div class="col-md-2 col-sm-2">
					<h3>Guest Count</h3>
				</div>
				<div class="col-md-4 col-sm-4">
				<input type="number" class="select-css" style="background-image:none" min="100" value=100>
				</div>
			 </div>
           </div>
           <div class="form-group">
             <div class="row">
               <div class="col-lg-12">
                 <button type="button" class="btn-purple" id="selectButton" onclick="ShowHideDiv()">Select Orders ></button>
               </div>
             </div>
           </div>
           <div class="respond"></div>
           <div class="form-group">
             <div class="row">
               <div class="col-lg-12">
                 <p></p>
               </div>
             </div>
           </div>
         </form>
       </article>
     
   </div>
 </div>
 </div>
 <div class="row" style="display:none" id="orders">
	<div class="col-lg-10 col-lg-offset-1">
     <section class="reservation">
       <header>
         <h2>Select from our wide array of menu</h2>
       </header>
       <article>
         <form id="reservationForm" method="post" action="#">
           <div class="form-group">
					<?php
						
						$uniqueTypes = array();
						foreach(array_unique($allFoodTypes) as $value){
							array_push($uniqueTypes, $value);
						}
						$counter = 0;
						for($i=0; $i<count($uniqueCuisines); $i++){
							echo "<div id='$uniqueCuisines[$i]' style='display:none'>";
							echo "<div class='row'>";
							echo "<div class='col-md-12 col-sm-12'>
									<center><h1>$uniqueCuisines[$i]</h1></center>
								</div>";
					
							foreach($uniqueTypes as $value){
								$selectLimit = "";
								if($value == "Appetizer" || $value == "Soup" || $value == "Dessert"){
									$selectLimit = 3;
								}
								else if($value == "Main dish"){
									$selectLimit = 5;
								}
								$display = array();
								$display = getFoodName($uniqueCuisines[$i], $value);
									if($counter != 1){
										echo "
											</div>
											<div class='col-md-6 col-sm-6'>
												<center><h2>$value</h2></center><br><br>
												<div class='row'>
													<div class='col-md-12 col-sm-12'><h4>Please select <b>$selectLimit</b>:</h4></div>
												</div><br>
										";
										foreach($display as $food){
											echo"
												<div class = 'row'>
													<div class='col-md-12 col-sm-12'>
														<input type='checkbox'><label> $food</label>
													</div>
												</div><br>
											";
										}
										echo"</div>";
										$counter++;
									}
									else{
										$counter = 0;
										echo "<div class='row'>";
										echo "<div class='col-md-6 col-sm-6'>
												<center><h2>$value</h2></center><br><br>
												<div class='row'>
													<div class='col-md-12 col-sm-12'><h4>Please select <b>$selectLimit:</b></h4></div>
												</div><br>
										";
										foreach($display as $food){
											echo"	
												<div class = 'row'>
													<div class='col-md-12 col-sm-12'>
														<input type='checkbox'><label>$food</label>
													</div>
												</div><br>
											";
										}
										echo"</div>";
									}
							}
							echo "</div></div>";
						}
					?>
			</div>
			<br><br>
			<div class = "row">
			<div class="col-lg-12">
                 <button type="button" class="btn-purple" id="selectButton" onclick="submitted()">Submit Order</button>
            </div>
         </form>
       </article>
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
        <p class="copyright">&copy; Catering Service 2020</p>
      </div>
    </div>
  </div>
</footer>

  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/core/jquery.min.js"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/plugins/moment.min.js"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/plugins/bootstrap-datetimepicker.js"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/material-kit.js"></script>
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

</body>

<!-- Mirrored from html.codecafe.cc/flamenco/offers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Sep 2016 17:34:33 GMT -->
</html>
