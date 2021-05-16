<html>
    <head>
        <title>
            Student Perfomance Analysis
        </title>
        <link rel="stylesheet" href="style.php">
	</head>
    <body>
	 
<!--navigation bar-->
    <div class="topnav">
        <a class="active" href="home_page.php">Home</a>
        <a id="signup" href="http://localhost/register.php">
        Sign Up
        </a>
        <a href="about.html">About</a>
    </div>


    <div class="bg">
        <h1>
            Welcome to Student Perfomance Analysis Portal
        </h1>
       
<!--form-->
        <form action="stud_page.php" method="post">
            <fieldset>
                <legend>Log In</legend>
                Register No:<br>
		<input 
			type="text" 
			placeholder="Enter Register no" 
			name="regno">
		<br><br>
		<input 
			type="password" 
			placeholder="Password" 
			name="psw">
		
		<select name="Occupation"  id="cars">
			<option value="HOD">HOD</option>
			<option value="Teacher">Teacher</option>
                  	<option value="Student">Student</option>
		</select>
		
                <center>
                    <button name="submit">Sign in</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                </center>
            </fieldset>
        </form>

        <div class="Register">
            <center>
                
                <h3>
                    Are you New member?<br>
            Register now<br>
                </h3>
		<a  href="http://localhost/register.php">
			<button class="inline">Signup</button>
		</a>
            </center>
            
        </div>
    </div>
      
    </body>
</html>
