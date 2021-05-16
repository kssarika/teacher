<?php

	$servername = "localhost";
		$username = "sarika";
		$password = "Sarika@2001";
		$dbname="user_details";
	$conn=new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) 
		{
	  		die("Connection failed: " . $conn->connect_error);
		} 

	$exp=$conn->query("SELECT test_name,max_mark,marks,date
			FROM stud_marks 
			WHERE sub_code = 'cs1121' 
			AND reg_no = '32019135014'
			LIMIT 1	");

	

	$pred=$conn->query("SELECT test_name,max_mark,marks,date
			FROM stud_marks 
			WHERE sub_code = 'cs1121' 
			AND reg_no = '32019135014'");

	while ($row = mysqli_fetch_array($exp)){
	
		$first_date = date_create($row[3]);
		echo "First date =".$first_date->format("%R%a days")."\n";

		$first_per = ($row[2]/$row[1])*100;	

	}

	$x1 = $first_date;
	$y1 = $first_per; 
	$m = 0;$count =0;

	$exp_date = intval($first_date->format("%R%a")) + 120; 
	while ($row = mysqli_fetch_array($pred)){
	
		$x2 = date_create($row[3]);
		echo "Next date =" .$x2->format("%R%a days")."\n";
		
		if($x2 == $x1)
			continue;

		$Date_Diff = date_diff($x1,$x2);
		$y2 = ($row[2]/$row[1])*100;
		
		$diffDays= intval($Date_Diff->format("%R%a"));

		echo "Date Diff :$diffDays\n";
		$m1 = ($y2 - $y1)/$diffDays;

		$m += $m1;$count++; 
		
		$x1 = $x2; $y1 = $y2; 
			

	}
		$avg_m = $m1/$count;

		echo "Average Slope = $avg_m";

		$x = $exp_date - intval($x2->format("%R%a"));
		
		

		$Pred_Score = $avg_m + $first_per;

		echo "Predicted Score : $Pred_Score";

	

?>
