<?php

class Jaime extends Lannister {
	function person($pers)
	{
		if (get_parent_class($pers) != "Lannister")
			return("Let's do this");
		elseif (get_class($pers) == "Cersei") 
			return("With pleasure, but only in a tower in Winterfell, then.");
		else
		  return ("Not even if I'm drunk !");
	}
}

?>