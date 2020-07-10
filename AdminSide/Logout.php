<?php
	include_once("Connection.php");
	unset($_SESSION["AdminID"]);
	session_destroy();
	header("location:Index.php");

	
?>