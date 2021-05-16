<html>
    <head>
        <title>
            Teacher Page
        </title>
	<link rel="stylesheet" href="stud_pagecss.php">
	
    </head>
    <body>
	
        <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
              document.getElementById("main").style.marginLeft = "250px";
              document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            }
            
            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
              document.getElementById("main").style.marginLeft= "0";
              document.body.style.backgroundColor = "white";
            }
        </script>

        <div class="topnav">
            <a id="signup" href="home_page.html">
                Logout
            </a>
            <a id="signup" href="profile.html">
                My profile
            </a>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="http://localhost/teacher_login.php">Home Page</a>
            <a href="#">Subject 1</a>
            <a href="#">Subject 2</a>
            <a href="#">Subject 3</a>
          </div>
            <div id="main">
		
		<?php include "marks_detailsphp.php"
			//echo $regno;
		?>

                <h2 class="head">teacher page</h2>
                <div id="prof">
                    <img src="/home/renjithkumar/Downloads/login image.png" alt="profilepic" class="avatar">
                </div>
		<center>   
            <div class="cont">
                <form acttion="" method="POST" >
                    <label class="left">Subject Code:</labelclass="left">
                    <input type="text" name="subcode" class="left" required>
			
			<input type="text" name="sub" class="right" required>
			<label class="right">Subject Name:</label><br>

		<label class="left">semester:</labelclass="left">
                    <input type="number" name="sem" class="left" min="1" max="6">

                    <input type="text" name="yoa" class="right" required>
			        <label class="right">Year of admission</label><br>

                    

                    <label class="left">Test Name</label>
                    <input type="text" name="test" class="left" required>

                    <input type="text" name="max"class="right">
                    <label for="marks" class="right">Max. Marks</label><br>

			<label class="left">Date of test</label>
                    <input type="date" name="date" class="left" required>

			<center><button name='submit'>
                        Submit
                    </button>
			
			
		        </form>
            </div></center>
            </div>
    </body>
</html>
