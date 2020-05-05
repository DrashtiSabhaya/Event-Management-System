<?php
	include('Database/connect.php');
	include('session.php');		
	include("header.php");
	$q=mysqli_query($con,"select * from temp");
	while($f=mysqli_fetch_row($q))
	{
		$id=$f[0];
		$image=$f[1];
		$name=$f[2];
		$price=$f[3];
	}
	if(isset($_POST['submit']))
	{
		$name=$_POST['nm'];
		$email=$_POST['email'];
		$mo=$_POST['mo'];
		$date=$_POST['date'];	
		$q=mysqli_query($con,"select * from temp");
		$im="";
		$nm="";
		$pri=0;
		$r=mysqli_num_rows($q);
		while($res=mysqli_fetch_array($q))
		{
				$id=$res[0];
				$im=$res[1];
				$nm=$res[2];
				$pri=$res[3];
				$q1=mysqli_query($con,"INSERT INTO booking(nm,email,mo,theme,thm_nm,price,date)VALUES('$name','$email','$mo','$im', '$nm', '$pri','$date')");
				if($q1>0)
				{
						echo "<script>alert('Your Event is Booked');</script>";
						echo '<script type="text/javascript">window.location="index.php";</script>';
				}
				else
				{
						echo "<script>alert('Not Booked');</script>";
				}
		}
	}		
	$qry=mysqli_query($con,"select * from temp where id=".$id);
	$row=mysqli_fetch_row($qry);	
?>

<script>
$(function()
{
	$("#datepicker").datepicker
	({
		changeMonth:true,
		changeYear:true
	});
});
>
</script>

<div class="codes">
<div class="container"> 
<h3 class='w3ls-hdg' align="center">BOOKING</h3>
<div class="grid_3 grid_4">
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1"  name="nm" pattern="[A-Za-z\s]{2,30}" title="Only Letter For Name" id="focusedinput" placeholder="Name" required="">
								</div>
							</div>
							<div class="form-group">
								<label for="smallinput" class="col-sm-2 control-label label-input-sm">Email</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1 input-sm" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter Proper Email Id" id="smallinput" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="smallinput" class="col-sm-2 control-label label-input-sm">Mobile no</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1 input-sm" name="mo" id="smallinput" pattern="([7-9]{1})+([0-9]{9})" title="Only Number" maxlength="10" placeholder="Mobile no" required=""/>
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Your Theme :</label>
								<div class="col-sm-8">
								<img src="./images/<?php echo $row[1]; ?>" height="200"  width="300"/></div>		
							</div>
							<div class="form-group">
								<label for="disabledinput" class="col-sm-2 control-label">Theme Name :</label>
								<div class="col-sm-8">
									<input disabled="" type="text" class="form-control1" value="<?php echo $row[2]; ?>" name="price" id="focusedinput" placeholder="Theme Price" >
								</div>
							</div>
							<div class="form-group">
								<label for="disabledinput" class="col-sm-2 control-label">Theme Price :</label>
								<div class="col-sm-8">
								<input disabled="" type="text" class="form-control1" value="<?php echo $row[3]; ?>" name="price" id="focusedinput" placeholder="Theme Price" >
								</div>
							</div>
							<div class="form-group">
								<label for="smallinput" class="col-sm-2 control-label label-input-sm">Event Date</label>
								<div class="col-sm-8">
									<input type="date" class="form-control1 input-sm" name="date" id="smallinput" placeholder="DD/MM/YYYY" required=""/>
								</div>
							</div>
					<div class="contact-w3form" align="center">
					<a href="book.php">
					<input type="submit" name="submit" class="btn"  value="BOOK"></a>
					</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
<?php 
	include_once("footer.php");
?>