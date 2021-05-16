<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$regno=$_POST['regno'];
		$psw=$_POST['psw'];
		$occ=$_POST["Occupation"];
		$_SESSION['varname'] = $regno;

		//database details
		$servername = "localhost";
		$username = "sarika";
		$password = "Sarika@2001";
		$dbname="user_details";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		//check connection
		if ($conn->connect_error) 
		{
	  		die("Connection failed: " . $conn->connect_error);
		} 
		//echo "Connected successfully";

		//for students		
		if($occ=="Student")
		{
			//echo "Student selected";
			
			$sql = "SELECT *
				FROM stud_details
				where reg_no='$regno'
				AND password='$psw'";
			$result=mysqli_query($conn,$sql);
			$check=mysqli_fetch_array($result);
			if(isset($check))
			{
				
				header("Location:http://localhost/stud_page.php");
				
			}
			else
			{	
  				echo "Error:incorrect username/password";
			}
				
			
		}
		if($occ=="Teacher")
		{
			//echo "Teacher selected";
			
			$sql = "SELECT *
				FROM teacher_details
				where reg_no='$regno'
				AND password='$psw'";

			$result=mysqli_query($conn,$sql);
			$check=mysqli_fetch_array($result);
			if(isset($check))
			{
				header("Location:http://localhost/teacher_login.php");
				
			}
			else
			{	
  				echo "Error:incorrect username/password";
			}
		}

		if($occ=="HOD")
		{
			//echo "hod selected";
			
			$sql = "SELECT *
				FROM hod_details
				where reg_no='$regno'
				AND password='$psw'";

			$result=mysqli_query($conn,$sql);
			$check=mysqli_fetch_array($result);
			if(isset($check))
			{
				header("Location:http://localhost/hod_login.php");
				
			}
			else
			{	
  				echo "Error:incorrect username/password";
			}
		}

		mysqli_close($conn);
	}

	else if(isset($_POST['signup'])){
		header("Location:http://localhost/register.php");
	}
?>
