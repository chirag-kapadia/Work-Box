<?php
	$con=mysqli_connect("localhost","root","","dbfreelancing") or die(mysqli_error());
	session_start();
	//ob_start();
	 /* function logout()
    {
    	if(!isset($_SESSION['ClientID']))
    	{
    		header("location:index.php");
    	}
    }*/
?>