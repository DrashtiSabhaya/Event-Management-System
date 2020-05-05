<?php
	include_once("header.php");
	include('../Database/connect.php');
	include('session.php');
	if(isset($_REQUEST['submit']))
	{
		$fnm=$_FILES["image"]["name"];
		$nm=$_REQUEST['nm'];
		$pr=$_REQUEST['price'];
		
		move_uploaded_file($_FILES["image"]["tmp_name"],"../images/" .$_FILES["image"]["name"]);
		@session_start();
		if(isset($_SESSION['admin']))
				{
					$qry1=mysqli_query($con,"INSERT INTO wedding(img,nm,price)VALUES('$fnm','$nm',$pr)");
					if($qry1)
					{
						echo "<script> alert('Added');</script>";		
						echo '<script type="text/javascript">window.location="wed_disp.php";</script>';
					}	
					else
					{
						echo "<script> alert('Not added');</script>";		
					
					}
				}	
			}
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
								<label for="focusedinput" class="col-sm-2 control-label">Enter Image</label>
								<div class="col-sm-8">
									<input type="file"  name="image">
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Enter Price</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1"  name="price" id="focusedinput" placeholder="Theme Price" >
								</div>
							</div>
							<div class="form-group">
								<label for="txtarea1" class="col-sm-2 control-label">Enter Name</label>
								<div class="col-sm-8">
								<input type="text" class="form-control1"  name="nm" id="focusedinput" placeholder="Theme Name"></div>
								</div>
							</div>
					<div class="contact-w3form" align="center">
					<input type="submit" name="submit" class="btn" value="SEND"> <input type="button" value="DISPLAY" class="btn my" onClick="javascript:location.href='wed_disp.php'" />
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