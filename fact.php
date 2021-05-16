<?php
	$a=readline("Enter the num: ");
	$fact=1;
	$i=$a;
	while($i>0){
		$fact=$fact*$i;
		$i--;	
	}
	echo"factorial of $a is:$fact\n";
?>
