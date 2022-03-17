#!/usr/bin/php
<?php
	$x = 0;
	$str = "";
	while ($x++ < 1000)
		$str .= "X";
	$x = 10;
	while($x-- > 0)
		echo mb_strimwidth($str, 0, 100, "\n");
	echo mb_strimwidth($str, 0, 11, "\n");
?>