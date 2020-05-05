<?php
	include_once("header.php");
	include_once("Database/connect.php");
	@session_start();
	if(isset($_POST['submit']))
	{
		$count="";
	 	$name=$_POST['nm'];
	  	$surnm=$_POST['surnm'];
	    $unm=$_POST['unm'];
	 	$email=$_POST['email'];
	 	$pswd=$_POST['pswd'];
	 	$mo=$_POST['mo'];
	    $adrs=$_POST['adrs'];
	  	$q=mysqli_query($con,"select unm from registration where unm='$unm' ");
		if(mysqli_num_rows($q)>0)
		{
					echo "<script> alert('Username already exist');</script>";	
		}
		else
		{
			$qry=mysqli_query($con,"insert into registration values(null,'$name','$surnm','$unm','$email','$pswd','$mo','$adrs')");
			if($qry)
			{
				
				$qry1=mysqli_query($con,"select id from registration where unm='$unm'");
				while($row=mysqli_fetch_row($qry1))
				{
						$qry2=mysqli_query($con,"insert into login values(NULL,'$unm','$pswd')");
						if($qry2)
						{
							echo "<script> alert('Please First Login to your account');</script>";
							echo "<script> window.location.assign('login.php')</script>";	
						}		
					
				}
			}
		}
	}
	
?>
	
	<div class="banner about-bnr">
		<div class="container">
		</div>
	</div>
	<div class="codes">
		<div class="container"> 
		<h2 class="w3ls-hdg" align="center">Registration Form</h2>
				  
	<div class="grid_3 grid_4">
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" action="" method="post" name="reg" onsubmit="return validate(this)">
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" pattern="[A-Za-z\s]{2,30}" title="Only Letter For Name"  name="nm" id="focusedinput" placeholder="Name" required="">
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Surname</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1"  name="surnm" pattern="[A-Za-z\s]{2,30}" id="focusedinput" placeholder="Surname" required="">
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">User Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1"  name="unm" id="focusedinput" placeholder="User Name" required="">
								</div>
							</div>
							<div class="form-group">
								<label for="smallinput" class="col-sm-2 control-label label-input-sm">Email</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1 input-sm" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter Proper Email Id" name="email" id="smallinput" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control1" name="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8.}" title="Must Cointain At Least One Number & One Uppercase & One Lowercase Letter, & At Least 8 Or More Characters" id="inputPassword" placeholder="Password" required="">
								</div>
							</div>
							<div class="form-group">
								<label for="smallinput" class="col-sm-2 control-label label-input-sm">Mobile no</label>
								<div class="col-sm-8">
									<input type="text" onkeydown="return onlyNumbers(event);" pattern="([7-9]{1})+([0-9]{9})" title="Only Number" class="form-control1 input-sm" name="mo" maxlength="10" id="smallinput" placeholder="Mobile no" required=""/>
								</div>
							</div>
							<div class="form-group">
								<label for="txtarea1" class="col-sm-2 control-label">Address</label>
								<div class="col-sm-8"><textarea name="adrs" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
							</div>
					<div class="contact-w3form" align="center">
					<input type="submit" name="submit" value="SEND">
					</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
			<?php
				include_once("footer.php");
			?>