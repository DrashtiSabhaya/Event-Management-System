<?php
			include('../Database/connect.php');
			
			$de="delete from birthday where id=".$_GET['id'];
			mysqli_query($con,$de);
			echo '<script type="text/javascript">window.location="birthd_disp.php";</script>';		
?>