<?php
include('Database/connect.php');
if(isset($_POST['submit']))
{
	$a = $_POST['Name'];
	$b = $_POST['Email'];
	$c = $_POST['Message'];
	$q = mysqli_query($con,"insert into feedback values(NULL,'$a','$b','$c')");
	if($q)
	{
		 echo "<script> alert('Send Successfully')</script>";
		 echo "<script> window.location.assign('index.php');</script>";
	}
	else
	{
		echo "Not Send";
	}
}


?>
<?php
	include_once("header.php");
?>
	<!-- //header -->
	<div class="banner about-bnr w3-agileits">
		<div class="container">
		</div>
	</div>
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<h2 class="w3ls-title1">Contact <span>Us</span></h2>
			<div class="contact-agileitsinfo">
				<div class="col-md-8 contact-grids">
					<p>As Times go by in your life, it becomes more precious. So , Make every moment mindful, meaningful and memorable and The most memorable moments in life are the ones you have never planned. </p><br />
					<h5>...BECAUSE WE WILL BE THERE TO PLAN THEM FOR YOU !!</h5>	
					<div class="contact-w3form">
						<h3 class="w3ls-title1">Drop Us a Line</h3>
						<form action="#" method="post"> 
							<textarea name="Message" placeholder="Message..." required=""></textarea>
							<input type="text" name="Name" placeholder="Your Name" required=""/>
							<input type="text" name="Email" placeholder="Email" required=""/>
							<input type="submit" name="submit" value="SEND">
						</form>
					</div>
				</div>
				<div class="col-md-4 contact-grids">
					<div class="cnt-address">
						<h3 class="w3ls-title1">Address</h3>
						<h4>Classic Events</h4>
						<p>Kalwad Road,
							<span></span>
							Rajkot.
						</p>
						<h4>Get In Touch</h4>
						<p>Javgal Patel: +91 90333 36811
							<span>Mohit Patel: +91 96870 00004 </span>
							E-mail: <a href="mailto:info@example.com">info@classicevents.in</a>
						</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<?php
		include_once("footer.php");
	?>