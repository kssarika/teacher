<html>
	<head>
		<title>K S Sarika's login page</title>
	</head>

	<body>
		<h1>Please Log In</h1>
		<form action = '' method = "post">
		<?php
				session_start();
				
				if(isset($_POST['submit'])){
					$uname = $_POST['uname'];
					$psw = $_POST['psw'];

					if($uname == NULL || $psw == NULL){
						echo "Email and Password Required";
						error_log("Login fail ".$_POST['uname']." $check");
					}

					else if(strpos($uname,'@')===false){
						echo "Email must have an at-sign (@)";
						error_log("Login fail ".$_POST['uname']." $check");
					}
					
								
					else if($psw !='php123')
						echo "Incorrect password";
					else{
							$_SESSION['UNAME'] = $_POST['uname'];
							header("Location: autos.php?name=".urlencode($_POST['uname']));
							
						
					}
				}
		?>
			
			<br><label> User Name</label>
			<input type = "textbox" name = "uname"><br>

			<label> Password</label>
			<input type = "textbox" name = "psw"><br>

			<input type = "submit" placeholder = "Log In" name = "submit">

			<a href = "http://localhost/lab/index.php">
				<button>Cancel</button>
			</a>

		</form>
	</body>

</html>

