<?php 
require_once "ITours.php";
abstract class Tours implements {
		public $id;
		public $name;
		public $imge;
		public $price;

		public function __construct($id,$name,$imge,$price){
			$this->id = $id;
	    	$this->name = $name;
	    	$this->image = $image;
	    	$this->price = $price;
	    	
		}
	}

 ?>