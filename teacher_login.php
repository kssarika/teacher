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
		
        //var x = <?php echo $name?>; 
        //document.write(x); 
   
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
			
		    <a href="javascript:void(0)"
			class="closebtn"
			onclick="closeNav()">&times;
			</a>
			
		    <a href="http://localhost/teacher/marks_details.php">Enter Marks</a>
		    <a href="http://localhost/teacher/stud_perf.php" id="sub 1">Student Perfomance</a>
		    <a href="http://localhost/teacher/stud_perfchart.php">Graphical report of student's Performance</a>
		    <a href="#">Subject 3</a>
		  </div>
            
		<div id="main">
		<?php
			include "stud_pagephp.php";
			teach_wel($conn);		
			
		?>

                <h2 class="head">teacher page</h2>
                <div id="prof">
                    <img src="/home/renjithkumar/Downloads/login image.png" alt="profilepic" class="avatar">
                </div>
            </div>
    </body>
</html>
