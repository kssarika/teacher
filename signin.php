<html>
    <head>
        <title>SPA: Sign in</title>
        <link rel="stylesheet" href="style.php">
    </head>
    <body >
	<!--<?php include 'signinphp.php';					//php
	?> -->
        <center>
        <div class="topnav">
            <a class="active" href="home_page.php">Home</a>
            <a id="signup" href="http://localhost/register.php">
                Sign UP
            </a>
            <a href="about.html">About</a>
        </div>
       
        
        <form action="signinphp.php" method="post">
            <div class="container">
                
                <div class="h1">
                    <center>
                        <h2>Login</h2>
                    </center>
                </div>
                <div class="form" >
                    <div >
                        <center>
                            <img src="/home/renjithkumar/Downloads/login image.png" alt="profilepic" class="avatar">
                        </center>
                    </div>
                
                    <label ><b>Register No / Staff Id:</b></label>
                    <input type="text" placeholder="Enter Register No / Staff Id" name="regno" required><br>
                    <label ><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required><br>

			<b><label>Occupation:</label><b>
                <select name="Occupation"  id="cars">
			<option value="HOD">HOD</option>
			<option value="Teacher">Teacher</option>
                  	<option value="Student">Student</option>
		</select>
                    <center>
                        <button type="submit" name="submit">Log In</button>
                    </center>
                </div>
            </div> 
                 
                <div class="Register">                    
                    Are you a new member?<br>
                Register now<br>
		<button class="inline" name="signup">Signup</button>
                              
            </div>
        
    
            </form>
        </center> 
    </body>
</html>
