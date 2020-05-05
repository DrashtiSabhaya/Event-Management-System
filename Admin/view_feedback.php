<?php
				include_once('../Database/connect.php');
				include_once('session.php');
				include_once("header.php");
				$a = mysqli_query($con,'select * from feedback');
				echo "<div class='codes'>
				<div class='container'>
				<h3 class='w3ls-hdg' align='center'>Feed Back</h3>
				<div class='grid_3 grid_5 '><br/>
					<table class='table table-bordered' >
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Comment</th>
								<th></th>
							</tr>
						</thead>";
						
				while($r = mysqli_fetch_row($a))
				{
					echo '<tbody><tr> <td>'.$r[1].'</td><td>'.$r[2].'</td><td>'.$r[3].'</td><td>';?>
				<a href="delete_feedback.php?id=<?php echo $r[0];?>" onClick="return  confirm('Do you want to Delete Y/N')"><u>Delete</u></a></td></tr>
				<?php
						}
					echo "</tbody></table></div></div></div>";
					include_once("footer.php");
?>
