<?php
	session_start();
	$conn=create_conn();
	$subcode=$_SESSION['subcode'];
	$subname=$_SESSION['sub'];
	$max=$_SESSION['max'];
	$testname=$_SESSION['test'];
	$staffid=$_SESSION['varname'];
	$date=$_SESSION['date'];


	//on clicking submit button
	if(isset($_POST['submit']))
	{


		$regno=$_POST["regno"];
		$marks=$_POST["mark"];




		$sql = "INSERT INTO stud_marks
			(reg_no,sub_code,test_name,max_mark,marks,staff_id,date)
			VALUES ('$regno','$subcode','$testname','$max','$marks','$staffid','$date')";
			if ($conn->query($sql) === TRUE)
			{
				echo "<h3>"."Added "."register no:".$regno."\tmark:".$marks."</h3>";
				showtable($conn,$testname,$staffid,$subcode);
			}
			else
			{
  				echo "<h3>" ."No value input" ."</h3>" . "<h4>" ."please input a value"."</h4>";
			}
			unset($regno);
			unset($marks);


		}

	else if(isset($_POST['show']))
	{
		showtable($conn,$testname,$staffid,$subcode);
	}

	if(isset($_POST['del']) && isset($_POST['user_id'])){
		$sl_no =$_POST['user_id'];
		$result=$conn->query("DELETE FROM stud_marks
					where sl_no = '$sl_no'");
		if($result != NULL){
			echo "Deleted "."$id";
			showtable($conn,$testname,$staffid,$subcode);
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

	//To Display Table
	function showtable($conn,$testname,$staffid,$subcode){

		$result=$conn->query("SELECT reg_no,marks,sl_no
				FROM stud_marks
				where test_name = '$testname'
				and staff_id='$staffid'
				and sub_code='$subcode'
				ORDER BY reg_no");
		while ($row = $result -> fetch_row()) {
    			echo "<tr><td>" .$row[0]."</td><td>".$row[1]."</td><td>";
			echo ("<form method = 'post'><input type = 'hidden' name = 'user_id' value = '".$row[2]."'>");
			echo "<input type = 'submit' value = 'Delete' name = 'del' id = 'delbtn'>";
			echo "</form>";
			echo "</td></tr>";

		}
		echo "</table>";

	}

	//function welcome($conn){

	//}
?>
