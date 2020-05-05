<?php
@session_start();
if(!isset($_SESSION['uname']))
{
	echo "<script> window.location.assign('login.php');</script>";	
}
?>