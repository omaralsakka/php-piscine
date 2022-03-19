#!/usr/bin/php
<?php
    date_default_timezone_set('Europe/Paris');
    
	$week = array(
		1 => "lundi",
		2 => "mardi",
		3 => "mercredi",
		4 => "jeudi",
		5 => "vendredi",
		6 => "samedi",
		7 => "dimanche");

	$month = array(
		1 => "janvier",
		2 => "février",
		3 => "mars",
		4 => "avril",
		5 => "mai",
		6 => "juin",
		7 => "juillet",
		8 => "août",
		9 => "septembre",
		10 => "octobre",
		11 => "novembre",
		12 => "décembre");
	
	if ($argc < 2)
        exit();

    $date = explode(" ", $argv[1]);
?>