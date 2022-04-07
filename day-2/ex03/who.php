#!/usr/bin/php
<?php
	$file = fopen("/var/run/utmpx", "r");
	date_default_timezone_set("Europe/Helsinki");
	while (!feof($file))
	{
		$data = fread($file, 628);
		if (strlen($data) == 628)
		{
			$data = unpack("a256user/a4id/a32line/ipid/itype/itime", $data);
			if ($data['type'] == 7)
			{
				$usr = trim($data['user']);
				$dt = trim($data['line']);
				$time = date("M  j H:i", $data['time']);
				echo str_pad($usr,9," ");
				echo str_pad($dt,9," ");
				echo $time . " \n";		
			}
		}
	}
?>