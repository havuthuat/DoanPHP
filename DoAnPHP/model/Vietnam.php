<?php
require_once "tours.php";

class Vietnam extends Tours {

	function getType(){
  		return "Vietnam tours";
  	}
	
  	function getDisplayPrice(){
		return $this->price." VND";
	}
	function getImagePath(){
  		return "imge/".$this->imge.".jpg";
  	}
}

?>