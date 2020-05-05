<?php
	 
	@session_start();
	if(!isset($_SESSION['admin']))
	{
		echo "<script> window.location.assign('index.php');</script>";
	}
	
?>