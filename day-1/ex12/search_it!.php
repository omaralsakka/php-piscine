#!/usr/bin/php
<?php
	if ($argc > 2)
	{
		$i = 1;
		$needle = $argv[1];
		while (++$i < $argc)
			$arr[] = $argv[$i];
		$i = 0;
		$found = 0;
		foreach($arr as $key)
		{
			if (strpos($key, $needle) !== false)
			{
				while ($key[$i] != ':')
					$i++;
				$i++;
				$val = "";
				while ($i < strlen($key))
				{
					$val .= $key[$i];
					$i++;
				}
				$i = 0;
				$found = 1;
			}
		}
		if ($found == 1)
			echo "$val\n";
	}
?>