<?php
	session_start();
	$staffno=$_SESSION['varname'];
	echo "<h4'>".$staffno."</h4>";
	$conn=create_conn();
	
?>
<?php
	function sub_details($conn,$staffno)
	{
		$result=$conn->query("SELECT sub_name 
				FROM sub_details
				where staff_id = $staffno");
		$no=$result->num_rows;
		echo "<h4'>".$no."</h4>";
		//while ($row = $result -> fetch_row()) {
    			//echo "<h1>".$row[0]."</h1>";
		//}
	}
	
	function create_conn(){
		$servername = "localhost";
		$username = "sarika";
		$password = "Sarika@2001";
		$dbname="user_details";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) 
		{
	  		die("Connection failed: " . $conn->connect_error);
		} 
		else
			return $conn;
	}
?>
