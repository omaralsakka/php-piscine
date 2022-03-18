#!/usr/bin/php
<?php
	$i = 0;
	$arr = array();
	if ($argc < 2)
		exit (0);
	while (++$i < $argc)
	{
		$str = preg_replace('/\s\s+/', ' ',  $argv[$i]);
		$str = trim($str);
		if (strpos($str, " "))
		{
			$arr2 = explode(' ', $str);
			$arrtemp = $arr;
			$arr = array_merge($arrtemp, $arr2);
		}	
		else
			array_push($arr, $str);
	}
	foreach($arr as $word)
	{
		if (('a' <= $word[0] && $word[0] <= 'z') || ('A'<= $word[0] && $word[0] <= 'Z'))
			$alph[] = $word;
		elseif (is_numeric($word))
			$numb[] = $word;
		else
			$chars[] = $word;
	}
	sort($alph, (SORT_STRING | SORT_FLAG_CASE));
	sort($numb, SORT_STRING);
	sort($chars);
	foreach($alph as $val)
		echo "$val\n";
	foreach($numb as $val)
		echo "$val\n";
	foreach($chars as $val)
		echo "$val\n";
?>