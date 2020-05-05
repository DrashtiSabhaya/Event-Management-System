<?php
 	include_once("header.php");
	include_once("slider.php");
	include_once("Database/connect.php");
?>
	<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body">
					<img src="images/cs_birthday.JPG" alt=""> 
					<p>	
					It has been enabling corporate and brands in reaching out to audiences through events,trade-shows and conferences.
		Being one of the top corporate planners in india,we create live events,brandec environments and integrated media experiences helping clients build brands and relationships with customers.</p>
		</div> 
			</div>
		</div>
	</div>
	<!-- //modal -->  
	<!-- banner-bottom -->
	<div class="w3-agile-text">
		<div class="container"> 
			<h2>Making Moments Memorable...</h2>
		<!--	<p>Vivamus vitae elementum velit. Morbi convallis nisi velit, maximus consequat lacus sagittis et. Sed at fringilla erat, id mollis eros.</p>-->
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- features -->
	<div class="features">
		<div class="container">
			<div class="col-md-4 feature-grids">
				<h3 class="w3ltitle">WHAT <span>WE ARE</span></h3>
				<p> Classic Events is young and dynamic event management compnay, which positions itself as "One-Stop Solutions" for all event needs. At Classic Events,we strive to be the most reliable and creative provider of a wide range of services to the clients.</p>
				<p>	Classic Events is one of the leading corporate event management companies in india.</p>
				<div class="w3ls-more">
					<a href="#" class="effect6" data-toggle="modal" data-target="#myModal"><span>Read More</span></a>
				</div>
			</div>
			<div class="col-md-4 feature-grids">
				<img src="images/cs_event.jpg" alt=""/>
			</div>
			<div class="col-md-4 feature-grids">
				<h3 class="w3ltitle">OUR SPECIFICATIONS</h3>
				<div class="w3ls-pince">
					<div class="pince-left">
						<h5>01</h5>
					</div>
					<div class="pince-right">
						<h4>Designer Wedding </h4>
						<p>Classic Events offers comprehensive wedding planning solutions.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3ls-pince">
					<div class="pince-left">
						<h5>02</h5>
					</div>
					<div class="pince-right">
						<h4>Destination Wedding </h4>
						<p>Choose a beautiful location for your wedding function.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3ls-pince">
					<div class="pince-left">
						<h5>03</h5>
					</div>
					<div class="pince-right">
						<h4>Theme Wedding </h4>
						<p>Our wedding themes come with numerous varieties.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //features -->
	<?php
		include("projects.php");
		?>
	
	<!-- services -->
	<div class="services">
		<div class="container">
			<h3 class="w3ltitle"> OUR SERVICES</h3>
			<div class="services-agileinfo">
				<div class="servc-icon">
					<a href="wedding.php" class="agile-shape"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
					<p class="serw3-agiletext">Wedding</p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="anniversary.php" class="agile-shape"><span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
					<p class="serw3-agiletext"> Anniversary </p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="birthday.php" class="agile-shape"><span class="glyphicon fa fa-gift" aria-hidden="true"></span>
					<p class="serw3-agiletext">Birthday party</p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="other_events.php" class="agile-shape"><span class="glyphicon glyphicon-music" aria-hidden="true"></span>
					<p class="serw3-agiletext">Enjoyments</p>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	
	<?php
		include_once("footer.php");
	?>