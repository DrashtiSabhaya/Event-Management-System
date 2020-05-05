<?php
	include_once("header.php");
	include_once('Database/connect.php');
	include_once("session.php");
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
				$q1=mysqli_query($con,"INSERT INTO booking(theme,thm_nm,price)VALUES('$im', '$nm', '$pri')");
				if($q1>0)
				{
						echo "<script>alert('Your Event is Booked....THANK YOU.');</script>";
						echo '<script type="text/javascript">window.location="index.php";</script>';
				}
				else
				{
						echo "<script>alert('Not Booked');</script>";
				}
		}

	include_once("footer.php");
?>