<?php
			include "stud_pagephp.php";
?>
<html>
    <head>
        <title>
            Student page
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
            <a id="signup" href="http://localhost/home_page.php">
                Logout
            </a>
            <a id="signup" href="profile.html">
                My profile
            </a>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="http://localhost/stud_page/ranking.php">Know your prfomance</a>
             <a href="http://localhost/stud_page/chart.php">Know subject wise Graphical report</a>
            <a href="#">Subject 2</a>
            <a href="#">Subject 3</a>
          </div>
            <div id="main">
		<?php
			stud_wel($conn);
		?>

                <h2 class="head">Home page</h2>
                <div id="prof">
                    <img src="/home/renjithkumar/Downloads/login image.png" alt="profilepic" class="avatar">
                </div>
            </div>
    </body>
</html>
