<?php 
	include("header.php");
	$id = $_GET['id'];	
	include('Database/connect.php');
	if(isset($_POST['submit']))
	{
		$list=mysqli_query($con,"select * from wedding where id=".$id);
							
			while($q=mysqli_fetch_row($list))
			{
				$id=$q[0];
				$image=$q[1];
				$name=$q[2];
				$price=$q[3];
			}
				mysqli_query($con,"TRUNCATE TABLE temp");
				mysqli_query($con,"delete * from booking");
				$qr1=mysqli_query($con,"insert into temp values('$id','$image','$name',$price)");
						if($qr1)
						{
							echo "<script> window.location.assign('cart.php');</script>";	
						
						}
						else
						{
							echo "<script > alert('Not added  to cart')</script>";	
						}
					
					}
	?>

<?php
			$id =$_GET['id'];
			$list=mysqli_query($con,"select * from wedding where id=".$id);				
			while($q=mysqli_fetch_row($list))
			{
			?>
			
<!-- modal -->
	<div role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">	
				<a href="gallery.php">BACK TO WEDDING</a>					
				</div> <form method="post">
				<div class="modal-body">
					<img src="images/<?php echo $q[1]; ?>" alt="img" height="300" width="545"> 
					<p>
					<br/><?php echo "Name : ".$q[2]; ?><br/>
					<?php echo "Price : ".$q[3].""; ?><br/>
					<input type='submit' name='submit' value='BOOK NOW' class='btn my'/>
					</p><?php } ?>
					</form>
		</div> 
			</div>
		</div>
	</div><br/><br><br>
	<!-- //modal -->  
	<?php include("footer.php");
	?>