<html>
    <head>
        <title>
            Teacher Page
        </title>
	<link rel="stylesheet" href="stud_pagecss.php">
	<!--<?php include "signinphp.php"
	?>-->
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
		
                <h2 class="head">teacher page</h2>
                <div id="prof">
                    <img src="/home/renjithkumar/Downloads/login image.png" alt="profilepic" class="avatar">
                </div>
		<center>   
            		<div class="cont">
               			<form action="" method="POST" >
                   			 <label class="left">register no:</label>
                    			 <input type="text" name="regno" class="left" >

                   			<input type="text" name="mark"class="right">
                    			<label for="marks" class="right">Marks</label><br>

			        	<center><button name='submit' class="form">
                       					 Submit
                   				</button>
						<button name='show' class="form">
                        				Show Marks
                    				</button >
		        	</form>
            		</div>
		<table id="customers">
			<tr>
				<th>Register no</th>
				<th>Marks</th>
				<th>Action</th>
			</tr>
			<?php
			include "marks_entryphp.php";
			?>
		</table>
		
		</center>
            </div>
    </body>
</html>
