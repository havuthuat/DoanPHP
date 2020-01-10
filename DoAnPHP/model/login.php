<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "quanlitoursdulich";


	$db = new mysqli($servername, $username, $password, $database);

	$sql = "SELECT * from admin";
	$check=false;
	$result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
	if (isset($_POST['submit'])) {
		for ($i=0; $i < count($result) ; $i++) { 
			if ($result[$i]['usersname'] == $_POST['name'] && $result[$i]['passwords'] == $_POST['pass'] ) {
				$check=true;
				break;
			}
		}
	}
	if($check==true){
		header('Location: ../giaodien.php');
	}else{
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			margin: 250px 50px 50px 50px;
			background: #2673b8;
			display: flex;
			justify-content: center;
			align-items: center;
}
		a{
			text-decoration-line: none;
		}
		.login{
			display: grid;
			width: 400px;
			height: 400px;
			border: 2px solid;
			padding: 10px;
			border-radius: 10px;
			background: #ffab0b;
		}
		input{
			background: white;
			color: black;
			border: black;
			border-bottom: 1px solid black;
		}
		label{
			color: black;
		}
		button{
			background: #f84031;
			color: white;
			border: green;
			height: 150%;
		}
		h1,
		br,
		a{
			color: black;
			text-align: center;
		}
	</style>
</head>
<body>
	<form action="" class="login" method="POST">
		<h1>LOGIN</h1>
		<label>
			User name
		</label>
		<input type="Text" id="name" name="name" placeholder="Enter your username..." required="">
		<label>
			Password
		</label>
		<input type="password" id="pass" name="pass" placeholder="Enter your password..." required="">
		<br>
		<input style="background: #f84031" type="submit" name="submit" value="Đăng nhập">
		<br>
		<a href="forgotpassword.html">
			Forgot your password
		</a>
		<br>
		<a href="forgotpassword.html">
			Don't have account. Sign up
		</a>
	</form>
</body>
</html>