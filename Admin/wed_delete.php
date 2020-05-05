<?php
			include('../Database/connect.php');
			$de="delete from wedding where id=".$_GET['id'];
			mysqli_query($con,$de);
			echo '<script type="text/javascript">window.location="wed_disp.php";</script>';
?>