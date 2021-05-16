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

$result=$conn->query("SELECT sub_code,sub_name
      FROM sub_details
      where staff_id = '464210'");

  $sub= 'cs1121';
  echo "sub: $sub";

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
  $dataPoints = array();
  while ($row2 = mysqli_fetch_array($chart)){

    $per=($row2[1]/$row2[2])*100;
    $dir = array('x' => date($row2[3]),'y'=> $per );

    array_push($dataPoints,$dir);
  }

  $data_dir = $data_dir = array('type' => "line",
                                'axisYType' => "secondary",
                                'name'=> "$reg",
                                'showInLegend' => "true",
                                'markerSize'=> 0,
                                'dataPoints'=> $dataPoints);


  array_push($data,$data_dir);
}

print_r(json_encode($data,JSON_NUMERIC_CHECK));
?>
