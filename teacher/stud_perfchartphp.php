<?php

	session_start();
	$conn = connect();

	$regno=$_SESSION['varname'];

	echo $regno;

	$result=$conn->query("SELECT sub_code,sub_name
				FROM sub_details
				where staff_id = $regno");

	if(isset($_POST['show']))
	{
		$sub=$_POST['sub'];
		echo "sub: $sub";

		//selectin reg_no and name for chart
		$result1=$conn->query("select reg_no
	        from stud_marks
	        where sub_code='$sub'
	        group by reg_no");


		$data = array();

		while ($row1 = mysqli_fetch_array($result1)){

	  	$reg = $row1[0];
	  	$chart = $conn->query("select test_name,marks,max_mark,date
	        FROM stud_marks
	        where reg_no = '$reg'
	        order by date");
	  	$dataPoints = array(array('label' => " ",'y'=> 0));
	  	while ($row2 = mysqli_fetch_array($chart)){

				$test = $row2[0];

	    	$per=($row2[1]/$row2[2])*100;
	    	$dir = array('label' => "$test",'y'=> $per );

	    	array_push($dataPoints,$dir);
	  	}

	  	$data_dir = array('type' => "spline",
	                                //'axisYType' => "secondary",
																	'logarithmic'=> true, 
	                                'name'=> "$reg",
	                                'showInLegend' => "true",
	                                'markerSize'=> 0,
	                                'dataPoints'=> $dataPoints);


	  	array_push($data,$data_dir);
	}


	}






function connect(){

	$servername = "localhost";
		$username = "sarika";
		$password = "Sarika@2001";
		$dbname="user_details";
	$conn=new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error)
		{
	  		die("Connection failed: " . $conn->connect_error);
		}
	return $conn;

}

?>
