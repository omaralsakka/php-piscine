#!/usr/bin/php

<?php
	$i = 0;
	$x = 0;
	//$arr = array();
	if ($argc < 2)
		exit (0);
	while (++$i < $argc)
	{
		$str = preg_replace('/\s\s+/', ' ', $argv[$i]);
		if (strpos($str, " "))
		{
			$arr2 = explode(' ', $str);
			$arrtemp = $arr;
			$arr = array_merge($arrtemp, $arr2);
		}
		else
			array_push($arr, $str);
	}
	sort($arr);
	while ($x < count($arr))
	{
		echo "$arr[$x]\n";
		$x++;
	}
?>