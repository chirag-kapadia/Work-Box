<?php
	$con=mysqli_connect("localhost","root","","dbfreelancing") or die(mysqli_error());
	session_start();

	  function notlogout()
    {
    	if(isset($_SESSION["AdminID"])=="")
    	{
    		header("location:index.php");
    	}
    }
?>