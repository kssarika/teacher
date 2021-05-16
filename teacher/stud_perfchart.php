<?php

	include "stud_perfchartphp.php";

?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="stud_pagecss.php">
	<script>


	window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {

	animationEnabled: true,
	zoomEnabled: true,
	theme: "dark1",
	title: {
		text: "Student Perfomance"
	},
	axisX: {
			title: "Test Name",
			interval: 1
	},
	axisY: {
		title: "Marks",
		suffix: "%"

	},
	toolTip: {
		shared: true
	},
	legend: {
		cursor: "pointer",
		verticalAlign: "top",
		horizontalAlign: "center",
		//dockInsidePlotArea: true,
		itemclick: toogleDataSeries
	},
	data: <?php echo json_encode($data,true);?>
});
chart.render()


function toogleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

}

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

</head>
<body>
	<div class="topnav">
            <a id="signup" href="http://localhost/signin.php">
                Logout
            </a>

            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="http://localhost/teacher_login.php">Home Page</a>
            <a href="http://localhost/teacher/marks_details.php">Enter Marks</a>
            <a href="#">Subject 2</a>
            <a href="#">Subject 3</a>
       	</div>

	<h2>Choose subject:</h2>

		<form action='' method='post'>
			<select name="sub" >
				<?php while ($row = mysqli_fetch_array($result)):; ?>
				<option value="<?php echo $row[0];?>">
					<?php echo $row[1]; ?>
				</option>
				<?php endwhile;?>

      </select>
			<button name="show">Submit</button>
		</form>

	<div id="chartContainer" style="height: 370px; width: 50%; float:right"></div>
	<h2><?php echo "sub: $subname"?></h2>
	<script src="chart.js">
	</script>
</body>
</html>
