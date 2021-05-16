<?php
	if(isset($_POST['submit']))
	{	
	
			$name = $_POST['name'];
			$em = $_POST['email'];	
			$mob = $_POST['mob'];

			echo " Name:".$name."<br>"."\n Email ID:" .$em ."<br>"."\n Mobile No:" .$mob; 
	}
		
?>


