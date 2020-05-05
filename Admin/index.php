<?php
 	include_once("header.php");
	include("../Database/connect.php");
?>

	<!-- banner-bottom -->
	<div class="w3-agile-text">
		<div class="container"> 
			<?php
					@session_start();
					if(isset($_SESSION['admin']))
					{
						$adm=$_SESSION['admin'];
						echo "<h2 align='center'>WELCOME ".$adm."</h2>";
					} 
		?>
		</div>
	</div>
	<!-- //banner-bottom -->
						
	<!-- services -->
	<div class="services">
		<div class="container">
			<h3 class="w3ltitle"> EDIT SERVICES</h3>
			<div class="services-agileinfo">
				<div class="servc-icon">
					<a href="add_wed.php" class="agile-shape"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
					<p class="serw3-agiletext">Wedding</p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="add_anni.php" class="agile-shape"><span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
					<p class="serw3-agiletext"> Anniversary </p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="add_birthd.php" class="agile-shape"><span class="glyphicon fa fa-gift" aria-hidden="true"></span>
					<p class="serw3-agiletext">Birthday party</p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="add_other.php" class="agile-shape"><span class="glyphicon glyphicon-music" aria-hidden="true"></span>
					<p class="serw3-agiletext">Enjoyment</p>
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