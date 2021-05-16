<html>


    <head>
        <title>SPA: Register</title>
        <link rel="stylesheet" href="style.php">			<!--/*head portion*/-->
    </head>


    <body >								<!--Body-->

	<div class="topnav">
            <a class="active" href="home/renjithkumar/sarika/Minor project/home_page.html">Home</a>		 
            <a id="signup" href="http://localhost/signin.php">		<!--Navigation Bar-->	
                Log in
            </a>
            <a href="about.html">About</a>
        </div>


       <center>

        <h2>Registration Form</h2>

        <div class="cont">					<!--Registration form-->
            <form action="" method="POST">
            
                <center>
                <div >						<!--img -->
                    <?php include 'registerphp.php';					//php
			?> 
                </div>

           	<center>

                <label ><b>Name:</b></label>
                <input 
			type="text" 
			placeholder="Enter Name" 
			name="name" 
			required>
		<br>

                <label ><b>Register No / Staff Id:</b></label>
                <input 
			type="text" 
			placeholder="Enter Register No / Staff Id" 
			name="regno" 
			required>
		<br>
		
                <label ><b>Email Id:</b></label>
                <input 
			type="email" 
			placeholder="Email Id" 
			name="email" 
			required>
		<br>

                <label><b>Password</b></label>
                <input 
			type="password" 
			placeholder="Enter Password" 
			name="psw" 
			required>
		<br>

                <b><label>Occupation:</label><b>
                <select name="Occupation"  id="cars">
			<option value="HOD">HOD</option>
			<option value="Teacher">Teacher</option>
                  	<option value="Student">Student</option>
		</select>
                  
                <select name="dept" class="date" >
                  <option value="Computer Science">Computer Science</option>
                  <option value="Electronics">Electronics</option>
                  <option value="Mathematics">Mathematics</option>
                  </select>
                <b><label class="date" >Department:</label><b>

		<br><br>

                <center>
		<b>

                    <label >Year of Admission</label>
                    <input 
			type="text"  
			placeholder="Only if you are a student"
			name="yoa">
		</b> 
		
                    <button type="submit" name="submit">Register</button>
		</center>
		

	</form>
        </div>
        </center>
        
    </body>
</html>

