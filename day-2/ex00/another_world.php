#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$str = trim($argv[1]);
		$result = preg_replace('/\s+/', ' ',  $str);
		$result = preg_replace('/\t+/', ' ',  $result);
		echo "$result\n";
	}
?>