<?php 
	require "model/database.php";
	require "model/Vietnam.php";
	require "model/Nuocngoai.php";

	$sql = "SELECT * from shoe";
	$result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);

	$tours = array();
 ?>