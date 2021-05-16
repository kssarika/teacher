<?php
	//pre_r($_POST);
	if(isset($_POST['submit']))
	{
		echo "username:".$_POST['uname'].'<br/>';
		echo "password".$_POST['psw'].'<br/>';

		$uname=$_POST['uname'];
		$psw=$_POST['psw'];

		$servername = "localhost";
		$username = "sarika";
		$password = "Sarika@2001";
		$dbname="sobha";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		if ($conn->connect_error) 
		{
	  		die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully";
		

		$sql = "INSERT INTO sample (username, password)
			VALUES ('$uname','$psw')";
		if ($conn->query($sql) === TRUE) 
		{
			echo "New record created successfully";
		} 
		else
		{	
  			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
		
?>
<?php
function pre_r($array){
	echo'<pre>';
	print_r($array);
	echo'</pre>';
	

}

?>
