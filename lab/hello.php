<?php

	$file = 'HarryPotter.txt';

	echo "\n\nThe Source File\n------------------------------------\n";	
	read($file);

	echo "\n\n1. Copy\t 2. Rename\t 3. Delete\t 4. Quit";
	$s=1;
	
	while($s==1){

		echo "\n";
		$c = readline("\n Enter Your Choice : ");

		switch($c){

			case 1 : cpy($file);break;

			case 2 : rname($file);break;

			case 3 : dlt($file); break;

			case 4 : echo "Quitting...\n";
				 $s=0; break;

			default : echo "Invalid Choice...\n"; 
				 
		}		

	}

	function cpy($source){
	
		$dest = '/var/www/html/lab/snape.txt ';
		if( !copy($source, $dest) ) {

			echo "\nFile can't be copied!";
		}
		else {
			echo "\nFile has been copied to $dest! \n";
			echo "\n\nThe Copied File\n------------------------------------\n";
			read($dest);
		}
	
	}

	function read($file){

		echo file_get_contents($file);	
		echo "\n-------------------------------------------\n";

	}

	function rname($old){

		$new = '/var/www/html/lab/text.txt';
		global $file;
		if(rename( $old,$new))
		{
			echo "\n $old Successfully Renamed to $new\n";
			$file= $new;
		}	

	}

	function dlt($file){

		if (!unlink($file)) {
			echo ("\n $file cannot be deleted due to an error.\n");
		}
		else {
			echo ("\n $file	has been deleted successfully.\n");
		}

	}


?>
 

