<?php
	include_once("Database/connect.php");
	if(isset($_POST['submit']))
	{
		session_start();
		$count="";
		$uname=$_POST['unm'];
		if(!filter_var($uname, FILTER_VALIDATE_EMAIL))
		{
			$n1="Enter Valid Email.";
			$count++;
		}
		$pswd=$_POST['pswd'];
		if(!preg_match('/^[a-zA-Z\w]{6,18}+$/',$pswd))
		{
			$n2="Enter Valid Password";
			$count++;
		}	
		$qr=mysqli_query($con,"select * from login where unm='$uname' and pswd='$pswd'");
		if(mysqli_num_rows($qr))
		{
					echo "<script> alert($uname)</script>";
			
			echo "<script> window.location.assign('index.php');</script>";	
			$_SESSION['uname']=$uname;
			echo "<script> alert($uname)</script>";
		}	
		else
		{
					echo "<script> alert('Username or password does not exist')</script>";
		}
	}
	include_once("header.php");
?>
<div class="banner about-bnr">
		<div class="container">
		</div>
	</div>
	<div class="codes">
		<div class="container"> 
		<h2 class="w3ls-hdg" align="center">User Login</h2>
				  
	<div class="grid_3 grid_4">
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" action="" method="post">
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">User Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1"  name="unm" id="focusedinput" placeholder="User Name" required="">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control1" name="pswd" id="inputPassword" placeholder="Password" required="">
								</div>
							</div>
							<div class="contact-w3form" align="center">
					<input type="submit" name="submit" value="SEND">
					</div>
						</form><br/>
						<div align="center"><h5>Not an account? <a href="registration.php">Registration Here</a></h5></div>
						</div>
					</div>
				</div>
			</div>
		</div>
				<?php
				include_once("footer.php");
			?>