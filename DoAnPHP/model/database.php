<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "quanlitoursdulich";


$db = new mysqli($servername, $username, $password, $database);

$sql = "SELECT * from shoe";
	$result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
?>