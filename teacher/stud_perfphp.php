<?php
	session_start();	
	
	$regno=$_SESSION['varname'];
	
	echo " reg No : $regno";
	
	$conn = create_conn();		

		if ($conn->connect_error) 
		{
	  		die("Connection failed: " . $conn->connect_error);
		} 
		
		$result=$conn->query("select sub_name,sub_code 
					from sub_details
    					where staff_id = $regno;");

		if(isset($_POST['choose']))
		{
			$sub=$_POST['sub'];
			echo "sub Name: $sub";
			$testname=$conn->query("select test_name 
						from stud_marks 
						where sub_code = '$sub'
    						group by test_name"); 	
		}

		if(isset($_POST['show']))
		{

			$test = $_POST['test'];
			$sub=$_POST['sub'];
			echo "Test Name: $test";
			echo "sub Name: $sub";
			$subname=$conn->query("select sub_name
					from sub_details
					where sub_code='$sub'");

			$result1=$conn->query("select stud_marks.reg_no
						,stud_details.name
						,marks
						,max_mark 
						from stud_marks 
						left join stud_details 
						on stud_marks.reg_no = stud_details.reg_no 
						where sub_code = '$sub' and test_name = '$test';");		

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
	return $conn;
}

?>
