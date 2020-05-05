<?php
			include('../Database/connect.php');
			
			$de="delete from otherevent where id=".$_GET['id'];
			mysqli_query($con,$de);
			echo '<script type="text/javascript">window.location="other_disp.php";</script>';
?>