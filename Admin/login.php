<?php
include("../Database/connect.php");
if(isset($_POST['submit']))
{
	session_start();
		
	$name=$_POST['nm'];
	$pwd=$_POST['pwd'];	
	$qry=mysqli_query($con,"select * from admin where nm='$name' and pswd='$pwd'");
	if(mysqli_fetch_row($qry))
	{
		$_SESSION['admin']=$name;
		header('Location:index.php');	
		
	}	
	else
	{
		echo "<script> alert('Username or Password does not Exist')</script>";
	}
}
?>
<!--
Author: CLASSIC EVENTS
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Classic Events</title>
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Light Fixture Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!-- Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js --> 
<!-- web fonts -->
<link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web fonts -->
</head>
<body>
	<!-- header -->
	<div class="header">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header navbar-left">
					<h1>
					<img src="../images/logo.png"></h1>
				</div>
				<!-- navigation--> 
					<span class="sr-only">Classic Events </span>
				<div class="header-right">
					<div class="agileits-topnav">
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">					
						<div class="clearfix"> </div>
					</div><!-- //navigation -->
				</div>
				<div class="clearfix"> </div>
			</div>	
		</nav>		
	</div>	
	<!-- //header -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h3 class="w3ltitle"><span>CLASSIC</span> EVENTS</h3>
			<div class="footer-agileinfo">
			<div class="col-md-8 contact-grids">
	<div class="contact-w3form">
	
	<form name="login" action="" method="post"> 
							<input type="text" name="nm" placeholder="Your Name" required=""/></br>
							<input type="password" name="pwd" placeholder="Password" required=""/>
							<input type="submit" name="submit" value="SEND">
						</form>
</div></div>

		<!-- footer -->
	<div class="footer">
		<div class="container">
			
					</div>
				</div>
				<div class="col-md-6 footer-right">
					<div class="address">
						<div class="col-xs-2 contact-grdl">
						</div>
						<div class="col-xs-10 contact-grdr">
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- copy-right -->
		<div class="copy-right w3-agile-text">
			<div class="container">
				<div class="social-icons">
					
					<div class="clearfix"> </div>
				</div> 
				<p>© 2017 Classic Events, Rajkot. All rights reserved | Design by Drashti</p>	
			</div>
		</div>
		<!-- //copy-right -->
	</div>
	<!-- //footer --> 
	<!-- start-smooth-scrolling-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>