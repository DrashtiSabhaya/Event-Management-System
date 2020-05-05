    	<?php
			include('../Database/connect.php');
			
			$de="delete from feedback where id=".$_GET['id'];
			mysqli_query($con,$de);
			echo '<script type="text/javascript">window.location="view_feedback.php";</script>';
		?>
