<?php 
require_once "ITours.php";
abstract class Tours implements ITours {
		public $id;
		public $name;
		public $imge;
		public $price;

		public function __construct($id,$name,$price,$imge){
			$this->id = $id;
	    	$this->name = $name;
	    	$this->price = $price;
	    	$this->imge = $imge;
	    	
		}
	}

 ?>