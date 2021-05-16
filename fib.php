<?php
	$n=readline("Enter the no: terms: ");
	$a=1;
	$b=2;
	if($n==1){echo"1\n";}
	else if($n==2){echo"1\t2\n";}
	else
	{
		echo"1\t2\t";
		for($i=3;$i<=$n;$i++){
			$c=$a+$b;
			$a=$b;
			$b=$c;
			
			echo"$c\t";	
		}
	}
	echo"\n";
?>
