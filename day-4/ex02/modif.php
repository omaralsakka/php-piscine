<?php
	if ($_POST['login'] && $_POST['nwpw'] && $_POST['oldpw'] && $_POST['submit'] && $_POST['submit'] == "OK")
	{
		$usrs = unserialize(file_get_contents("../private/passwd"));
		if ($usrs)
		{
			$flag = 0;
			foreach($usrs as $key => $value)
			{
				if ($_POST['login'] === $value['login'] && hash('whirlpool', $_POST['oldpw']) === $value['passwd'])
				{	
					$flag = 1;
					$usrs[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
				}
			}
			if ($flag)
			{
				file_put_contents("../private/passwd", serialize($usrs));
				echo "OK\n";
			}
			else
				echo "ERROR\n";
		}
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>