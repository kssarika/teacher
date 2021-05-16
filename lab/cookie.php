<?php

	if (isset($_POST['sub'])){

		$uname = $_POST['uname'];

		$psw = $_POST['psw'];

	}
	
	if(!isset($_COOKIE[$uname])){

		setcookie($uname,$psw,time()+5);

	}

	setcookie('zap');


?>
<html>

	<body>

		<form action = '' method = 'post'>

			Username: <input type = 'text' name = 'uname'><br>
			Password: <input type = 'password' name = 'psw'>

			<button name = 'sub' >Submit</button>


		</form>
		<pre>

			<?php print_r($_COOKIE);?>

		</pre>

	</body>

</html>
