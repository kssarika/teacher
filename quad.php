<?php
	$a=readline("Enter the value of a:");
	$b=readline("Enter the value of b:");
	$c=readline("Enter the value of c:");
	$x=(($b*$b)-(4*$a*$c));
	if($x==0){
		$y= $b/(2*$a);
		echo "roots: -".$y ." and ".$y."\n";
		}
	else if($x>0){
		$m=sqrt($x);
		$y= ((-$b)+$m)/(2*$a);
		$z= ((-$b)-$m)/(2*$a);
		echo "root is".$y." and ".$z."\n";
		}
	else{
		$x=0-$x;
		$x=sqrt($x);
		$b =$b;
		$y=$x/2*$a;
		$z=(-$b)/2*$a;
		echo "root is".$z."+".$y."i" ." and ".$z."-".$y."i"."\n" ;
	}
?>
