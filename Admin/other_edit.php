<?php
	include_once("header.php");
	include('../Database/connect.php');
	include('session.php');
	if(isset($_REQUEST['submit']))
	{
		$id=$_REQUEST['id'];
		$fnm=$_FILES["image"]["name"];
		$nm=$_REQUEST['nm'];
		$pr=$_REQUEST['price'];
		
		move_uploaded_file($_FILES["image"]["tmp_name"],"../images/" .$_FILES["image"]["name"]);
		$update=mysqli_query($con,"UPDATE otherevent SET img='$fnm',nm='$nm',price='$pr' where id='$id'");
		if($update>0)
		{
			echo "<script> alert('Updated');</script>";
			echo '<script type="text/javascript">window.location="other_disp.php";</script>';
		}
		else
		{
			echo "<script> alert('Not Updated');</script>";
		}

	}
	$id=$_REQUEST['id'];
	$se=mysqli_query($con,"select * from otherevent where id=$id");
	$row=mysqli_fetch_array($se);
	
?>
<link href="../css/style.css" rel="stylesheet" type="text/css" />

<div class="codes">
<div class="container"> 
<h3 class='w3ls-hdg' align="center">EDIT WEDDING</h3>
<div class="grid_3 grid_4">
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Enter Image :</label>
								<div class="col-sm-8">
								<input type="file"  name="image">
								</div><div align="center">
								<img src="../images/<?php echo $row['img']; ?>" height="200"  width="200"/></div>		
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Enter Price :</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" value="<?php echo $row['price']; ?>" name="price" id="focusedinput" placeholder="Theme Price" >
								</div>
							</div>
							<div class="form-group">
								<label for="txtarea1" class="col-sm-2 control-label">Enter Name :</label>
								<div class="col-sm-8"><input type="text" value="<?php echo $row['nm']; ?>" name="nm" id="focusedinput" class="form-control1">
								</div>
							</div>
					<div class="contact-w3form" align="center">
					<input type="submit" name="submit" class="btn" value="UPDATE"> <input type="button" value="DISPLAY" class="btn my" onClick="javascript:location.href='other_disp.php'"/>
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