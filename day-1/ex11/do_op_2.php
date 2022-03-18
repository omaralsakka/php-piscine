#!/usr/bin/php
<?php
function isSign($char)
{
	if ($char == '+' || $char == '-' || $char == '*' || $char == '/' || $char == '%')
		return true;
	return false;
}
function ft_arth($a, $b, $sign)
{
	switch ($sign)
	{
		case '+':
			echo $a + $b . "\n";
			break;
		case '-':
			echo $a - $b . "\n";
			break;
		case '*':
			echo $a * $b . "\n";
			break;
		case '/':
			echo $a / $b . "\n";
			break;
		case '%':
			echo $a % $b . "\n";
			break;
	}
}
	if ($argc == 2)
	{
		$a = "";
		$b = "";
		$str = trim($argv[1]);
		$str = preg_replace('/\s\s+/', '',  $str);
		$str2 = str_split($str);
		foreach($str2 as $char)
		{
			if (isSign($char))
				$sign = $char;
			elseif (!isSign($char) && !is_numeric($char))
			{
				echo "Syntax Error\n";
				exit(0);
			}
		}
		for ($i = 0; $i < strlen($str); $i++)
		{
			if (!is_numeric($str[$i]))
				break;
			$a .= $str[$i];
		}
		for ($i = (strlen($a) + 1); $i < strlen($str); $i++)
		{
			if (!is_numeric($str[$i]))
				break;
			$b .= $str[$i];
		}
		ft_arth($a, $b, $sign);
	}
	else
		echo "Incorrect Parameters\n";
?>