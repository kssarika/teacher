<?php
	session_start();
		$servername = "localhost";
		$username = "sarika";
		$password = "Sarika@2001";
		$dbname="user_details";
	$conn=new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) 
		{
	  		die("Connection failed: " . $conn->connect_error);
		} 

	//$conn = $_SESSION['conn'];

	$regno=$_SESSION['varname'];

	echo "$regno";


	$result=$conn->query("SELECT teacher_details.reg_no,
				teacher_details.name 
				from teacher_details,hod_details 
				where hod_details.reg_no=464208 
				and teacher_details.dept=hod_details.dept");
	if ($result->connect_error) 
		{
	  		die("Connection failed: " . $conn->connect_error);
		} 

?>
