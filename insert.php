<?php 
   include("config.php");
if (isset($_POST['reg']))
	{
	  $fn = $_POST['fname'];
	  $ln = $_POST['lname'];
	  $un = $_POST['uname'];
	  $pw = $_POST['pass'];
	  $cit = $_POST['city'];
	  $st = $_POST['state'];
	  $pi = $_POST['pincode'];
	 
	$query="INSERT INTO info (fname,lname,uname,pass,city,state,pincode) VALUES ('$fn','$ln','$un','$pw','$cit','$st','$pi')";
			  
		if ($db->query($query) === TRUE) 
			{	
		echo "<script>alert('Registration Successful');window.location.href='loginform.php';</script>";
			}
	
	else 
			{
			echo "<script>alert('Already Registered');window.location.href='index.html';</script>";
			  
			}
	  }
	  
?>