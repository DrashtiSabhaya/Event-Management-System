<?php
				include_once('../Database/connect.php');
				include_once('session.php');
				include_once("header.php");
				$list=mysqli_query($con,"select * from booking");
				echo "<div class='codes'>
				<div class='container'>
				<h3 class='w3ls-hdg' align='center'>ORDERS</h3>
				<div class='grid_3 grid_5 '><br/>
					<table class='table table-bordered' >
						<thead>
							<tr>
								<th>Id</th>
								<th>User Name</th>
								<th>Email</th>
								<th>Mobile No</th>
								<th>Theme</th>
								<th>Theme Name</th>
								<th>Price</th>
								<th>Event Date</th><th></th>
							</tr>
						</thead>";
						
				while($q = mysqli_fetch_row($list))
				{
					echo '<tbody><tr> <td><span class="badge">'.$q[0].'</span></td><td>'.$q[1].'</td><td>'.$q[2].'</td><td>'.$q[3].'</td><td><img src="../images/'.$q[4].'" height="150" width="220"></td><td>'.$q[5].'</td><td>'.$q[6].'</td><td>'.$q[7].'</td><td>';
				?>
				<a href="delete_book.php?id=<?php echo $q[0];?>" onClick="return  confirm('Do you want to Delete Y/N')"><u>Delete</u></a></td></tr><?php } ?>
				</tbody></table></div></div></div>";
		<?php
				include_once("footer.php");
?>