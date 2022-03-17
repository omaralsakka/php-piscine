#!/usr/bin/php
<?php
	if ($argc != 2)
		exit (0);
	$str = trim($argv[1]);
	$str = preg_replace('/\s\s+/', ' ', $str);
	echo "$str\n";
?>