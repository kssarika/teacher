<?php

	include "hodphp.php";

?>
<html>
    <head>
	<meta charset = "utf-8" /> 
         
	<title>
            Student page
        </title>
 
        <link rel="icon" href = "https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" 
        type = "image/x-icon"> 
        
	<link rel="stylesheet" href="hodcss.php">
	
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
            <a href="http://localhost/stud_page.php#">Home Page</a>
            <a href="http://localhost/stud_page/chart.php">Know subject wise Graphical report</a>
            <a href="#">Subject 2</a>
            <a href="#">Subject 3</a>
          </div>
            <div id="main">
		<h2 class="head">Know your Perfomance</h2>
                <div id="prof">
                    <img src="/home/renjithkumar/Downloads/login image.png" alt="profilepic" class="avatar">
                </div>
		<form action='' method="post">
			<label>Choose subject</label>
			<select name="sub" >
				<?php while ($row = mysqli_fetch_array($result)):; ?> 
				<option value="<?php echo $row[0];?>">
					<?php echo $row[1]; ?>
				</option>	
				<?php endwhile;?>
						
                 	</select>
			<button name="show">Show Marks</button>	
			<!--<h3>
			<?php while ($row = mysqli_fetch_array($subname)):; ?>
				<?php echo "Subject:".$row[0]; ?>
			<?php endwhile;?>
			</h3>
			<table id="customers">
				<tr>
					<th>Test name</th>
					<th>Marks</th>
					<th>Max.Marks</th>
					<th>Percentage</th>
					<th>Rank</th>
				</tr>
				<?php $sum=0;$count=0;?>
				<?php while ($row1 = mysqli_fetch_array($result1)):;?>
					
						<?php
						$per=($row1[1]/$row1[2])*100;
						$sum+=$per;
						$count++;
						echo "<tr><td>".$row1[0]."</td><td>" 									.$row1[1]."</td><td>" 									.$row1[2]."</td><td>"
								.$per."</td><td>"
								.$row1[3]."</td></tr>";?>
					
					<?php endwhile;?>
					
			</table>-->
				
		</form>
			<!--<?php
					$avg=$sum/$count;
					echo "<h3>"."Expected marks: ". $avg."</h3>";
				?>-->
				
            </div>
    </body>
</html>
