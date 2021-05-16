<html>

	<body>
		<h1>Please Log In</h1>
		<?php
	
			if(isset($_POST['login'])){

				$uname = $_POST['uname'];
				if(strpos($uname,'@') === false){
					
					echo "Email must have an at-sign (@)";

				}
				
				else{

					$pdo = new PDO('mysql : host = localhost';
							port = 3306;
							dbname = 'sample',
							'sarika','Sarika@2001');1
				}

			}

		?>
		
		<form action = "" method = "POST">
		
		<br><label>User Name:</label>
		<input type = "text" name = "uname"><br>
		
		<label>Password: </label>
		<input type = "password" name = "psw"><br>
		
		<input type = "submit" name = "login" value = "LogIn">
		
		</form>

	</body>

</html>
