<!DOCTYPE html>
<html>
	<head>
		<meta charset="windows-1252">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

		<title>Test Carousel</title>


		<style media="screen">
		body {
	       font: 400 15px/1.8 Lato, sans-serif;
	       color: #777;
				 margin: 0;
				 padding: 0;
				 margin-right: 0;

	   }
	   h3, h4 {
	       margin: 10px ;
	       letter-spacing: 5px;
	       font-size: 20px;

	   }
		 footer{
		 	height:100px;
			background-color:#000;
			text-align: center;


		 }
         #navwrap {
			 width:8%;
			 margin-left:46%;
			 text-align:center;
			 display:none;
			 z-index:1;
			 background-color:rgba(0,0,0,0.3);
			 border-radius:5px;
			 margin-bottom: 20px;
		 }
		 #navwrap > a {
			 text-decoration:none;
			 width:5%;
			 margin-left:2%;
			 margin-right:2%;
			 color:red;


		 }
		 .fa-angle-up{

		 }

	   .carousel-inner img {

	       width: 100%; /* Set width to 100% */
	       margin: auto;

	   }
	   .carousel-caption h3 {
	       color: #fffff !important;
				 font-weight:800;
	   }

		 #omOss h1{
		 	margin-top:20px;

		 }
		 .navbar-brand {
		 	font-size: 30px;
			font-family: sans-serif;
			font-weight: 400;


		 }
		 #p{
		 	text-align:center;
			margin-right:20%;
			margin-left:20%;
			margin-top:20px;
		 }

	   @media (max-width: 600px) {
	     .carousel-caption {
	       display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
	     }
			 .navbar{
			 	position: static;
				margin: 0  0;
			 }
			 .col-sm-4 > h1 {
				 text-align:center;
			 }
<<<<<<< HEAD
			 
			 
=======
			 #p{
				 margin-left:10%;
				 margin-right:10%;

			 }
>>>>>>> dbfb6f58a8ca1f2597e0bb23d1d6e848d7287966
		 }

		 .navbar{
		 	opacity: 0.9;
			background-color: #00000;
			border-bottom: solid 2px red;



		 }

		 .col-sm-4 h1,p{
		 	margin:20px;


		 }

		 .kuppgift{
		 	/*margin:30 0;*/

			color:#000;
			text-align: left;
		 }
		 .karta {
			 padding-right:0px;
		 }
		 .row{
		 	margin-right:0;
		 }
		 .karta {

		 }


		</style>

		<script>

		</script>
	</head>

	<body>

<nav id="navbar"  class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">

		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
		 </button>

			<div class="navbar-brand">
				<span style="color:white">Järlåsa <span style="font-weight:600">Måleri</span> AB</span>
			</div>
		</div>

		<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a class="menyItem" href="#omOss">Om oss</a></li>
					<li><a class="menyItem" href="#tjanster">Tjänster</a></li>
					<li><a class="menyItem" href="Galleri.php">Galleri</a></li>
					<li><a class="menyItem" href="#Kontakt">Kontakt</a></li>
				</ul>
		</div>
</div>
</nav>




		<div id="myCarousel" style="" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">

	    <div class="item active">
	      <img src="burkar.jpg" class="img-responsive" alt="Kunde inte hitta bild" >
	      <div class="carousel-caption">
	        <h3>Lorem Ipsum</h3>
	        <p>Bästa måleriet</p>
	      </div>
	    </div>

	    <div class="item">
	      <img src="bod.jpg" class="img-responsive" alt="kunde inte hitta bild">
	      <div class="carousel-caption">
	        <h3>Järlåsa</h3>
	        <p>Nöjda kunder</p>
	      </div>
	    </div>

	    <div class="item">
	      <img src="bild.jpg" alt="kunde inte hitta bild " class="img-responsive" style="">
	      <div class="carousel-caption">
	        <h3>Vi kan måla</h3>
	        <p>Vi kan måla!</p>
	      </div>
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

<<<<<<< HEAD
	<div id="navwrap" ><a id="topLink" href="#myCarousel"><i class="fa fa-angle-up" aria-hidden="true" style="font-size:30px"></i></a></div>
=======
	<a href="#myCarousel" style="color:red"><div id="navwrap" ><i class="fa fa-angle-up" aria-hidden="true" style="font-size:30px"></i></div></a>
>>>>>>> dbfb6f58a8ca1f2597e0bb23d1d6e848d7287966
<div id="omOss"></div>
<br/>
<div id="omoss1">
	<div class="row">
		<div class="col-sm-12">
			<h1 style="text-align:center;color:red;font-weight:800">Om oss</h1>
			<br>
		<p id="p" >Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt
			ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			 quis nostrud exercitation ullamco laboris
			nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
			 esse
			cillum dolore eu fugiat nulla pariatur. Excepteur
			sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

		</div>



	</div>
	<div class="row">
		<div class="col-sm-12" style="text-align:center">

			<img src="pic.png" class="img-circle" width="150" height="150" style="margin: 40px  30px ; " alt="">

		</div>

	</div>

</div>
<div id="tjanster"></div>
<br/>

<div id="Services" style="background-color:#f4f4f4">
	<div class="row">
		<div class="col-sm-4">
			<h1 style="margin:30px">Tjänster</h1>
			<p> quis nostrud exercitation ullamco laboris
			nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
			 esse
			cillum dolore eu fugiat nulla pariatur. Excepteur
			sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		</div>
		<div class="col-sm-4">
			<h1>Tjänster</h1>
			<p> quis nostrud exercitation ullamco laboris
			nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
			 esse
			cillum dolore eu fugiat nulla pariatur.t, sunt in culpa qui officia deserunt mollit anim id est laborum.
			t, sunt in culpa qui officia deserunt mollit anim id est laborum.
			sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		</div>
		<div class="col-sm-4">
			<h1>Tjänster</h1>
			<p> quis nostrud exercitation ullamco laboris
			nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
			 esse
			cillum dolore eu fugiat nulla pariatur.t, sunt in culpa qui officia deserunt mollit anim id est laborum.
			t, sunt in culpa qui officia deserunt mollit anim id est laborum.
			sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>

		</div>
	</div>


</div>



<div id="Kontakt" >

	<div class="row">
		<div class="col-sm-6 kuppgift">
<div style="margin-left:50px">


			<h3>Kontaktuppgifter</h3>
		 <br/>
		 <h4>Mail:<a style="font-size:20px"> Mail@Järlåsa.se</a></h4>
		 <br/>
		 <h4>Telefon:<a style="font-size:20px"> 71231321</a></h4>
		 <br/>
		 <h4>Företagsadress:<a style="font-size:20px"> Järlåsa, långt bort</a></h4>
</div>
		</div>
		<div class="col-sm-6 karta" style="padding-right:0;">
		  <div id="map" style="width:100%;  height:400px;background:yellow"></div>
	    </div>

	</div>

</div>





<footer> &copy 2017</footer>

<script>

  function fixDiv() {
    var $div = $("#navwrap");
    if ($(window).scrollTop() > $div.data("top") && $(window).scrollTop() > 400) {
        $('#navwrap').css({'position': 'fixed', 'bottom': '0' , 'display': 'block' });
    }
    else {
        $('#navwrap').css({'position': 'static', 'top': 'auto', 'display': 'none'});
    }
    if(window.innerWidth < 600) {
		$('#topLink').prop( 'href', '#navbar' );
	}
	else {
		$('#topLink').prop( 'href', '#myCarousel' );
	}
}

$("#navwrap").data("top", $("#navwrap").offset().top);
$(window).scroll(fixDiv);

//------------------------------------------------------

//-----------------------------------------------------

function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(59.8861613, 17.1980244),
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.roadmap
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var marker = new google.maps.Marker({
          position: new google.maps.LatLng(59.8861613, 17.1980244),
          map: map,
    });
}

</script>






<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUQNgEoJkdZVMp04eNqLCFjdpwQyNjvcY&callback=myMap"></script>

	</body>
</html>
