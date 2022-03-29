<?php

class Targaryen{
	function getBurned(){
		if (get_called_class() == "Daenerys")
			return ("emerges naked but unharmed");
		else
			return ("burns alive");
	}
}

?>