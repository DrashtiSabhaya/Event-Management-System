<?php
				include_once('../Database/connect.php');
				include_once('session.php');
				include_once("header.php");
				$list=mysqli_query($con,"select * from birthday");
				echo "<div class='codes'>
				<div class='container'>
				<a href='add_birthd.php'>BACK</a>
				<h3 class='w3ls-hdg' align='center'>Birthday Display</h3>
				<div class='grid_3 grid_5 '><br/>
					<table class='table table-bordered' >
						<thead>
							<tr>
								<th>Id</th>
								<th>Images</th>
								<th>Name</th>
								<th>Price</th>
								<th></th><th></th>
							</tr>
						</thead>";
						
				while($q = mysqli_fetch_row($list))
				{
					echo '<tbody><tr> <td><span class="badge">'.$q[0].'</span></td><td><img src="../images/'.$q[1].'" height="150" width="220"></td><td>'.$q[2].'</td><td>'.$q[3].'</td><td><u><a href=birthd_edit.php?id='.$q[0].'>Edit</u></a></td><td>';?>
				<a href="birthd_delete.php?id=<?php echo $q[0];?>" onClick="return  confirm('Do you want to Delete Y/N')"><u>Delete</u></a></td></tr>
				<?php
						}
					echo "</tbody></table></div></div></div>";
					include_once("footer.php");
?>