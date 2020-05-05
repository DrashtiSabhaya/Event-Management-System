<?php
	session_start();
	$_SESSION['uname']=null;
	session_destroy();
	header("location:index.php");
?>