<!DOCTYPE html>
<html>
	<head>
		<meta charset="windows-1252">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<title>Test Carousel</title>


		<style media="screen">
		body {
	       font: 400 15px/1.8 Lato, sans-serif;
	       color: #777;
				 margin: 0;
				 padding: 0;

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
		 .navbar-brand{
		 	font-size: 30px;
			font-family: sans-serif;
			font-weight: 400;
		 }


	   @media (max-width: 600px) {
	     .carousel-caption {
	       display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
	     }
			 .navbar{
			 	position: static;
				margin: 0  0;
			 }
		 }
		 .navbar{
		 	opacity: 0.9;
			background-color: #00000;
			border-bottom: solid 2px rgba(48, 25, 152, 0.91);


		 }
		 .menyItem{
		 	color:rgb(24, 23, 24);
		 }
		 .col-sm-4 h1,p{
		 	margin:20px;


		 }
		 .kuppgift{
		 	margin:30px 0;
			color:#000;
			text-align: center;
		 }

		</style>

		<script>

		</script>
	</head>

	<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">

		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
		 </button>

			<div class="navbar-brand">
				Järlåsa <span style="font-weight:600">Måleri</span>
			</div>
		</div>

		<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a class="menyItem" href="#omOss">Om oss</a></li>
					<li><a class="menyItem" href="#Services">Tjänster</a></li>
					<li><a class="menyItem" href="#Kontakt">Kontakt</a></li>
				</ul>
		</div>
</div>
</nav>




		<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">

	    <div class="item active">
	      <img src="cat.jpg" alt="Kunde inte hitta bild" >
	      <div class="carousel-caption">
	        <h3>Lorem Ipsum</h3>
	        <p>Bästa måleriet</p>
	      </div>
	    </div>

	    <div class="item">
	      <img src="ships.jpg" alt="kunde inte hitta bild">
	      <div class="carousel-caption">
	        <h3>Järlåsa</h3>
	        <p>Nöjda kunder</p>
	      </div>
	    </div>

	    <div class="item">
	      <img src="forest.jpg" alt="kunde inte hitta bild York" style="">
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


<div id="#omOss">
	<div class="row">
		<div class="col-sm-8">
			<h1 style="text-align:center;margin:30px 10px 0 10px">Om oss</h1>
			<br>
		<p style="text-align:center;margin:40px">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt
			ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			 quis nostrud exercitation ullamco laboris
			nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
			 esse
			cillum dolore eu fugiat nulla pariatur. Excepteur
			sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

		</div>
		<div class="col-sm-4">

			<img src="pic.png" class="img-circle" width="150" height="150" style="margin: 40px  30px " alt="">

		</div>


	</div>

</div>

<div id="#Services" style="background-color:#f4f4f4">
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



<div id="Kontakt">

	<div class="row">
		<div class="col-sm-12 kuppgift">

			<h3>Kontaktupgifter</h3>
		 <br/>
		 <h4>Mail:</h4><a style="font-size:20px">Mail@Järlåsa.se</a>
		 <br/>
		 <h4>Telefon:</h4><a style="font-size:20px"> 71231321</a>
		 <br/>
		 <h4>Företags adress:</h4><a style="font-size:20px"> Järlåsa, långt bort</a>

		</div>
	</div>

</div>


<footer> &copy 2017</footer>










	</body>
</html>
