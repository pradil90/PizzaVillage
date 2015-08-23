<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title>Pizza Village</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<!-- <link rel="stylesheet" type="text/css" href="style/css/media-queries.css" /> -->
<!-- <link rel="stylesheet" type="text/css" href="style/js/player/mediaelementplayer.css" /> -->
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,700,700italic|Open+Sans+Condensed:300,700' rel="stylesheet" type='text/css'> -->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/retina.js"></script>
<script type="text/javascript" src="style/js/selectnav.js"></script>
<script type="text/javascript" src="style/js/jquery.masonry.min.js"></script>
<!-- <script type="text/javascript" src="style/js/jquery.fitvids.js"></script> -->
<script type="text/javascript" src="style/js/jquery.backstretch.min.js"></script>
<!-- <script type="text/javascript" src="style/js/mediaelement.min.js"></script> -->
<!-- <script type="text/javascript" src="style/js/mediaelementplayer.min.js"></script> -->
<!-- <script type="text/javascript" src="style/js/jquery.dcflickr.1.0.js"></script> -->
<!-- <script type="text/javascript" src="style/js/twitter.min.js"></script> -->
<script type="text/javascript">

	$.backstretch("style/images/Supreme_pizza.jpg");

function  pagerefresh(){

location.reload();


}

</script>
</head>
<body>
<div class="scanlines"></div>

<!-- Begin Header -->
<div class="header-wrapper opacity">
	<div class="header">
		<!-- Begin Logo -->
		<div class="logo">
		    <a href="index.html">
				<B><i><div class="intro">Pizza Village</div></B></i>
			</a>
	    </div>
		<!-- End Logo -->
		<!-- Begin Menu -->
		<div id="menu-wrapper">
			<div id="menu" class="menu">
				<ul id="tiny">
					<li><a href="index.php">HOME</a></li>
						
							
					<li><a href="Login.php">CRUST AND SIZE</a></li>
					
					<li class="active"><a href="index_cheese.php">CHEESE AND SAUCE</a></li>
					<li><a href="index_toppings.php">TOPPING</a></li>
					<li><a href="Dashboard.php">DASHBOARD</a></li>
						
					
					<li><a href="contact.php">CONTACT</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
		<!-- End Menu -->
	</div>
</div>
<!-- End Header -->

<!-- Begin Wrapper -->
<div class="wrapper"><!-- Begin Intro -->
<div class="intro">Make Your Own Pizza now in Seconds </div>
<form name="login-form" class="login-form" action="updatesauce.php" method="post">
<!--  -->
<h2 class="title">CHOOSE CHEESE & SAUCE</h2>
<!-- Begin Blog Grid -->
<div class="blog-wrap">
	<!-- Begin Blog -->
	<div class="blog-grid">
			
<div class="post format-standard box"> 

			<input type="checkbox"><class="title"><B>CHEESE ?</B><br>



	
	<input type="radio" name="cheese" value="Light">Light<br>
	<input type="radio" name="cheese" value="Normal">Normal<br>
	<input type="radio" name="cheese" value="Extra">Extra<br>
	<input type="radio" name="cheese" value="Double">Double<br>
	<input type="radio" name="cheese" value="Triple">Triple<br>
	
	
		
		</div>

		<div class="post format-standard box"> 

	<h2 class="title">CHOOSE A SAUSE</h2>
	<input type="radio" name="sauce" value="Hearty Marinara Sauce">Hearty Marinara Sauce<br>
	<input type="radio" name="sauce" value="BBQ Sauce">BBQ Sauce<br>
	<input type="radio" name="sauce" value="Garlic Parmesan White Sauce">Garlic Parmesan White Sauce<br>
			



	

	
	
		
		</div>

				

			
 		
 	
 	</div>

 	 	</div>
 	<center> 	
	<input type="submit"  id="register"  name="submit" value="Build"  />
	<input type="button"  onclick="pagerefresh()"  name="submit" value="Cancel"  />

</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<!-- End Blog -->

</div>
<!-- End Blog Grid -->

<!-- End Wrapper -->

<!-- Begin Footer -->
<div class="footer-wrapper">
<div id="footer" class="four">
		<div id="first" class="widget-area">
			<!-- <div class="widget widget_search">
				<h3 class="widget-title">Search</h3>
				<form class="searchform" method="get" action="#">
					<input type="text" name="s" value="type and hit enter" onFocus="this.value=''" onBlur="this.value='type and hit enter'"/>
				</form>
			</div> -->
			
	
	</div>
	<center><h1>Make your Own Pizza</h1></center>
</div>
<div class="site-generator-wrapper">
	<div class="site-generator">Copyright CMPE 280. Design by <a href="">Pradeep Ivan Bosco and Alice George</a>. All rights reserved.</div>
</div>
<!-- End Footer --> 
<script type="text/javascript" src="style/js/scripts.js"></script>
</body>
</html>