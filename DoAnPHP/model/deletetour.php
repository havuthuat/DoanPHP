<?php 
	require "database.php";
	require 'insertCart.php';
	// error_reporting(0);
	
	$id= $_GET['id'];
	// echo $id;
	// // // echo print_r($_SESSION['cart'][$id]);

	// unset($_SESSION['cart']['$id']);
	// // header("location: insertCart.php");

	if (!empty($_SESSION['cart'])) {
    $new=json_decode($_SESSION['cart'],true);
		for($i = 0; $i < count($new); $i++){
    	 // echo print_r($_SESSION['cart']);
        if($new[$i]["id"] == $id)
        {
            unset($_SESSION['cart'][$id]);
        }
    }
}
 ?>