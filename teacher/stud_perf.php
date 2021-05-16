<?php

	include "stud_perfphp.php";					
			
?>

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
			
			<a href="http://localhost/teacher_login.php" id="sub 1">Home Page</a>
		    <a href="http://localhost/teacher/marks_details.php">Enter Marks</a>
		    <a href="#">Subject 2</a>
		    <a href="#">Subject 3</a>
		  </div>
            
		<div id="main">
			<?php
				echo "<h1>"."Student Performance" ."</h1>";
			?>
			<form action='' method="post">
			<label>Choose subject</label>
			<select name="sub" >
				<?php while ($row = mysqli_fetch_array($result)):; ?> 
				<option value="<?php echo $row[1];?>">
					<?php echo $row[0]; ?>
				</option>	
				<?php endwhile;?>
						
                 	</select>
			<button name="choose" >Choose Test</button>	
			<select name="test" >
				<?php while ($row1 = mysqli_fetch_array($testname)):; ?> 
				<option value="<?php echo $row1[0];?>">
					<?php echo $row1[0]; ?>
				</option>	
				<?php endwhile;?>
			</select>

			<button name="show" >Show Marks</button>					
			
			<!--<h3>
			<?php while ($row = mysqli_fetch_array($subname)):; ?>
				<?php echo "Subject:".$row[0] ."Test Name: ".$test; ?>
			<?php endwhile;?>
			</h3>-->
			
			<table id="customers">
				<tr>
					<th>Reg. No</th>
					<th>Name of Student</th>
					<th>Marks</th>
					<th>Max.Marks</th>
					<th>Percentage</th>
										
				</tr>
				<?php while ($row2 = mysqli_fetch_array($result1)):;?>
					
						<?php
						$per = $row2[2]/$row2[3]*100;
						echo "<tr><td>".$row2[0]."</td><td>" 									.$row2[1]."</td><td>" 									.$row2[2]."</td><td>"
								.$row2[3]."</td><td>"
								.$per."</td></tr>";?>
					
					<?php endwhile;?>
                
                <div id="prof">
                    <img src="/home/renjithkumar/Downloads/login image.png" alt="profilepic" class="avatar">
                </div>
            </div>
    </body>
</html>
