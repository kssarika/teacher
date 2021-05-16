<?php
	$k='y';$i=0;
	while($k=='y'||$k=='Y')
	{
		$i++;
		$num=rand(1,100);
		echo "random num $i is:$num\n";
		$k=readline("Do you want more? (Y/N): ");
	}
	echo "OK BYE.. :)\n";
?>
