<?php
	$url="https://en.wikipedia.org/wiki/Main_Page";
	echo "The URL is: $url \n";

	$domain = parse_url($url, PHP_URL_HOST);
	echo "Domain name is: $domain \n";
?>
