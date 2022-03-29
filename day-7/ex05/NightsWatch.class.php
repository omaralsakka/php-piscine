<?php

class NightsWatch implements IFighter{
	protected $fighters;
	function recruit($person){
		if ($person instanceof IFighter)
			$this->fighter[] = $person;
	}
	function fight(){
		foreach($this->fighter as $key=>$value)
			print ($value->fight());
	}
}

?>