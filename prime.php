<?php
	$a=readline("Enter min no: ");
	$b=readline("Enter max no: ");	
	$i=$a;$flag=1;
	echo "Prime numbers betweeen $a and $b are:\t"; 
	for($i=$a;$i<=$b;$i++)
	{
		$flag=1;
		for($j=2;$j<$i;$j++){
			if($i%$j==0){
				$flag=0;
				break;
			}
		}
		if($flag==1){
		echo "$i\t";
		}
			
						
		
	}
	echo"\n";

?>
