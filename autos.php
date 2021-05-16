<?php
	
	session_start();
	if($_SESSION['UNAME']== NULL)
		die("Name parameter missing");
	$uname = $_SESSION['UNAME'];
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=test', 'sarika', 'Sarika@2001');
	
	if(isset($_POST['add'])){
		$stmt = $pdo->prepare('INSERT INTO autos
        		(make, year, mileage) VALUES ( :mk, :yr, :mi)');
    		$stmt->execute(array(
        		':mk' => $_POST['make'],
        		':yr' => $_POST['yr'],
        		':mi' => $_POST['ml'])
    		);
		
		echo "Record Inserted";		

	}

	if(isset($_POST['logout'])){

		
		header("Location: http://localhost/lab/index.php");
	}

?>
<html>
	<head>
		<title>K S Sarika-Autos Database</title>
	</head>

	<body>
		<h1><?php echo "Tracking Autos for $uname" ?>
		</h1>
		<form action = '' method = 'post'>

			<label>Make</label>
			<input type = 'text' name = 'make'><br>

			<label>Year</label>
			<input type = 'text' name = 'yr'><br>

			<label>Mileage</label>
			<input type = 'text' name = 'mil'><br>
		
			<button name = 'add'>ADD</button>
			<button name = 'logout'>Log Out</button>
		</form>
	</body>
</html>
