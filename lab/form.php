<?php
	
	if(isset($_POST['sub'])){

		$name = $_POST['name'];

	}

?>

<html>
	<head>
		<title>HTML and PHP</title>
	</head>

	<body>
		<form action = "" method = "POST">
			<label>Name:</label>
			<input type = "text" name = "name" placeholder = "Enter Your Name" required>
			<button name = "sub">Submit</button>
		</form>
		
		<?php
	
			if(isset($_POST['sub'])){

				$name = $_POST['name'];
				echo "WELCOME $name :) ";

			}

		?>

	</body>
</html>
