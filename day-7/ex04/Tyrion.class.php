<?php

class Tyrion extends Lannister {
	function person($pers)
	{
		if (get_parent_class($pers) != 'Lannister')
			return ("Let's do this");
		return ("Not even if I'm drunk !");
	}
}

?>