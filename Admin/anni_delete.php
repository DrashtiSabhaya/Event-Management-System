<?php
			include('../Database/connect.php');
			$de="delete from anniversary where id=".$_GET['id'];
			mysqli_query($con,$de);
			echo '<script type="text/javascript">window.location="anni_disp.php";</script>';
?>