<?php
	session_start();
	$regno=$_SESSION['varname'];

	$_SESSION['varname'] = $regno;
	echo "<h4> Reg No : ".$regno."</h4>";
	
		$servername = "localhost";
		$username = "sarika";
		$password = "Sarika@2001";
		$dbname="user_details";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);
		$_SESSION['conn']=$conn;

		if ($conn->connect_error) 
		{
	  		die("Connection failed: " . $conn->connect_error);
		} 
		//echo "Connected successfully";

		//mysql_select_db("user_details");

	function stud_wel($conn){ 
		
		global $regno;
		$result=$conn->query("SELECT name FROM stud_details
			where reg_no = $regno");
	
		
		while ($row = $result -> fetch_row()) {
    			echo "<h1>"."welcome " .$row[0]."</h1>";
  		}
  		// Free result set
		
  		$result -> free_result();
		$conn-> close();
	}

	function hod_wel($conn){ 

		global $regno;
		$result=$conn->query("SELECT name FROM hod_details
			where reg_no = $regno");
	
		
		while ($row = $result -> fetch_row()) {
    			echo "<h1>"."welcome " .$row[0]."</h1>";
  		}
  		// Free result set
		
  		$result -> free_result();
		//$conn-> close();
	}

	function teach_wel($conn){ 

		global $regno;
		$result=$conn->query("SELECT name 
					FROM teacher_details
					where reg_no = $regno");
	
		
		while ($row = $result -> fetch_row()) {
    			echo "<h1>"."welcome " .$row[0]."</h1>";
  		}
  		// Free result set
		
  		$result -> free_result();
		
	}
		
		
					
		
		
?>
