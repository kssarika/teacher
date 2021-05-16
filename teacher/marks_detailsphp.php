<?php
session_start();	
if(isset($_POST['submit']))
	{
		//create conn
		$conn=create_conn();

		//store values
		$subcode=$_POST['subcode'];
		$subname=$_POST['sub'];
		$sem=$_POST['sem'];
		$yoa=$_POST['yoa'];
		$testname=$_POST['test'];
		$max=$_POST['max'];
		$date=$_POST['date'];

		//store as global	
		$_SESSION['subcode']=$subcode;
		$_SESSION['sub']=$subname;
		$_SESSION['yoa']=$yoa;
		$_SESSION['test']=$testname;
		$_SESSION['max']=$max;
		$_SESSION['date']=$date;
		$regno=$_SESSION['varname'];
		echo $regno;
		$val ="INSERT INTO sub_details 
				(sub_code,sub_name,sem,staff_id)
			VALUES ('$subcode','$subname','$sem','$regno')";

		if ($conn->query($val) === TRUE) 
			{
				echo "<h2>"."Registered successfully"."</h2>";
				header("Location: http://localhost/teacher/marks_entry.php");
			} 
			else
			{	
  				header("Location: http://localhost/teacher/marks_entry.php");
				echo "<h2>"."Registered successfully"."</h2>";
			}
		
	}	
?>
<?php
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
	//function welcome($conn){
		
	//}
?>
