<?php
require_once "tours.php";

class Nuocngoai extends Tours {

	function getType(){
  		return "Nuocngoai tours";
  	}
  	function getDisplayPrice(){
		return $this->price." VND";
	}
	function getImagePath(){
  		return "imge/".$this->imge.".jpg";
  	}
}

?>