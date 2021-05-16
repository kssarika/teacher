<?php
//click submit
if(isset($_POST['submit']))
	{
		//store values
		$name=$_POST['name'];
		$regno=$_POST['regno'];
		$psw=$_POST['psw'];
		$email=$_POST['email'];
		$occ=$_POST['Occupation'];
		$dept=$_POST['dept'];
		

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
		if($occ=="Student"){
			$yoa=$_POST['yoa'];
			$sql = "INSERT INTO stud_details 
				(reg_no,name,email_id,password,Year_admn,dept)
			VALUES ('$regno','$name','$email','$psw','$yoa','$dept')";
			if ($conn->query($sql) === TRUE) 
			{
				echo "<h2>"."Registered successfully"."</h2>";
			} 
			else
			{	
  				echo "Error: " . $sql . "<br>" . $conn->error;
			}

		
		}

		//for teachers		
		if($occ=="Teacher"){
			$sql = "INSERT INTO teacher_details 
				(reg_no,name,email_id,password,dept)
			VALUES ('$regno','$name','$email','$psw','$dept')";
			if ($conn->query($sql) === TRUE) 
			{
				echo "<h2>"."Registered successfully"."</h2>";
			} 
			else
			{	
  				echo "Error: " . $sql . "<br>" . $conn->error;
			}

		
		}
		
		//for HOD		
		if($occ=="HOD"){
			echo "HOD selected";
			$sql = "INSERT INTO hod_details 
				(reg_no,name,email_id,password,dept)
			VALUES ('$regno','$name','$email','$psw','$dept')";
			if ($conn->query($sql) === TRUE) 
			{
				echo "<h2>"."Registered successfully"."</h2>";
			} 
			else
			{	
  				echo "Error: " . $sql . "<br>" . $conn->error;
			}

		
		}
		//close connection
		$conn->close();
	}
		
?>
