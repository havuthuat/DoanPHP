<?php 
	require "model/database.php";
	require "model/Vietnam.php";
	require "model/Nuocngoai.php";

	$tours = array();
	for($i = 0; $i < count($result); $i++) {
		$tour = $result[$i];
		if($tour['nametour'] == 'Ha Noi'){
			array_push($tours, new Vietnam($tour['id'], $tour['nametour'], $tour['price'],$tour['imge']));
		}
		if($tour['nametour'] == 'Sai Gon'){
			array_push($tours, new Vietnam($tour['id'], $tour['nametour'], $tour['price'],$tour['imge']));
		}
		if($tour['nametour'] == 'Vinh Long'){
			array_push($tours, new Vietnam($tour['id'], $tour['nametour'], $tour['price'],$tour['imge']));
		}
		if($tour['nametour'] == 'Quang Binh'){
			array_push($tours, new Vietnam($tour['id'], $tour['nametour'], $tour['price'],$tour['imge']));
		}
		if($tour['nametour'] == 'Binh Dinh'){
			array_push($tours, new Vietnam($tour['id'], $tour['nametour'], $tour['price'],$tour['imge']));
		}
		if($tour['nametour'] == 'Ha Long'){
			array_push($tours, new Vietnam($tour['id'], $tour['nametour'], $tour['price'],$tour['imge']));
		}
		// if($tour['nametour'] == 'Paris'){
		// 	array_push($tours, new Nuocngoai($tour['id'], $tour['nametour'], $tour['price'],$tour['imge']));
		// }
		if($tour['nametour'] == 'New York'){
			array_push($tours, new Nuocngoai($tour['id'], $tour['nametour'], $tour['price'],$tour['imge']));
		}
		if($tour['nametour'] == 'Ha Lan'){
			array_push($tours, new Nuocngoai($tour['id'], $tour['nametour'], $tour['price'],$tour['imge']));
		}
	}

	
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	
		.a1{
			background: black;
			width: 250px;
		}
		.b1{
			background: white;
			width: 100px;
		}
		.b2{
			background: white;
			flex-grow: 2;
		}
		.b3{
			background: white;
			width: 100px;
		}
		.b4{
			background: white;
			width: 100px;
		}

		.a2{
			background: black;
			width: 250px;
		}
		.a3{
			background: black;
			width: 500px;
		}
		.b{
			background: black;
			flex-grow: 3;

		}
		.c{
			background: #47d2d5 ;
			width: 50px;
		}
		.flex{
			display: flex;
			
		}

		/*div thu 2*/
		<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

li a:hover { /*rê chuột vào đổi màu backgrond*/
  background-color:#47d2d5; 
}
.kichthuocanh{
	width: 250px;
}
.div2{
	display: flex;
}
.div25{
	background: pink;
}
.div3{
	background: white;
}

.div4{
	display: grid;
	grid-template-columns: auto auto auto auto;
	margin: 0px 180px; 
	margin-left: 200px;

}
.div5{
	background: white;
}
.div6{
	background-image: url("anhnendiv.jpg");
}
.div7{
	background: white ;
}

a{
    text-decoration: none;
}
.user,.search{
	width: 25px;
}

.kieuchu1{
	font-family:'Pacifico', cursive;
	color: #47d2d5;
}
.kieuchu2{
	font-family: 'Lobster', cursive;
	font-size: 55px;
}

.hienthi3cai{
			display: grid;
			grid-template-columns: auto auto auto auto;
		}

 .chenchu{
            border:1px solid black;
            padding:100px 30px;
            font-size:30px;
            background-image:url(anhslide.jpg);
        }
.div8{
	display: flex;
	background: black ;
}
.div8-b{

}
img{
	
}
</style>
<body>
	<div class="flex">
		<div class="a1">
			<img src="https://img.icons8.com/bubbles/50/000000/email.png" width="30px">
			<a href="" style="color: white">vuthuatdev@gmail.com</a>
		</div>
		<div class="a2">
			<img src="https://img.icons8.com/doodle/48/000000/outgoing-call.png" width="30px">
			<a  style="color: white">0393.229.134</a>	
		</div>
		<div class="a3">
			<img src="https://img.icons8.com/office/30/000000/worldwide-location.png" width="30px">
			<a href="https://www.google.com/maps/place/101B+L%C3%AA+H%E1%BB%AFu+Tr%C3%A1c,+An+H%E1%BA%A3i+%C4%90%C3%B4ng,+S%C6%A1n+Tr%C3%A0,+%C4%90%C3%A0+N%E1%BA%B5ng+550000,+Vi%E1%BB%87t+Nam/@16.0596526,108.2393135,17z/data=!3m1!4b1!4m5!3m4!1s0x3142177e16d75991:0x711c915f162f6505!8m2!3d16.0596526!4d108.2415022?hl=vi-VN" href="" style="color: white">101B Lê Hữu Trác - P.Phước Mỹ - Q.Sơn Trà - TP.Đà Nẵng</a>	
		</div>
		<div class="b">
			
		</div>
		<div class="c">
			<a href="model/login.php"><img onclick="clickanh()" src="https://img.icons8.com/ios/50/000000/user.png"></a><!--  ảnh user  -->

		</div>
	</div>

	<div class="div2">
		<div class="b1">
			<h1>Anh</h1>
		</div>
		<div class="b2">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Trang Chủ</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Tin Tức <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Giới Thiệu</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Tours
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Shop</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
		      <button name="submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		<!--     <?php
        		if (isset($_REQUEST['submit'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "SELECT * from shoe where nametour like '%$search%'";
 
                // Kết nối sql
                mysql_connect("localhost", "root", "", "quanlitoursdulich");
                // Thực thi câu truy vấn
                $sql = mysql_query($query);
                //Đếm số đong trả về trong sql
                $num = mysql_num_rows($sql);
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    while ($row = mysql_fetch_assoc($sql)) {
                        echo '<tr>';
                            echo "<td>{$row['user_id']}</td>";
                            echo "<td>{$row['username']}</td>";
                            echo "<td>{$row['password']}</td>";
                            echo "<td>{$row['email']}</td>";
                            echo "<td>{$row['address']}</td>";
                        echo '</tr>';
                    }
                    echo '</table>';
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?> -->
		  </div>
		</nav>
  </div>
		<div class="b3">
			<a href="model/insertCart.php"><img onclick="clickgiohang()" src="https://img.icons8.com/dotty/80/000000/favorite-cart.png" width="50px"></a> <!-- icon-ảnh giỏ hàng -->
		</div>
	</div>
	<div class="div25">
		<img class="mySlides" src="anhslide.jpg" style="width:100%">
		<img class="mySlides" src="anhslide2.jpg" style="width:100%">
	</div>
	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
	  		var i;
	  		var x = document.getElementsByClassName("mySlides");
	  		for (i = 0; i < x.length; i++) {
	    	x[i].style.display = "none";
	  	}
	  		myIndex++;
	  		if (myIndex > x.length) {myIndex = 1}    
	  		x[myIndex-1].style.display = "block";  
	  		setTimeout(carousel, 2000); // Change image every 2 seconds
		}
	</script>
	<div class="div3">
		<center>
			<marquee width="10%" ><h1 class="kieuchu1">Tours hấp dẫn</h1></marquee>
			<h1 class="kieuchu2">Trọn vẹn kỳ nghỉ</h1>
		</center>
		
	</div>
	<div id= "container" class="hienthi3cai"></div>

	<div class="div4">
		<?php
			for($i = 0; $i < count($tours); $i++){
		?>
			<div class="item-shoe">
				<a href="model/chitiet.php"><center><img width="300px" height="300px"class="item-shoe-icon" src=<?php echo $tours[$i]->getImagePath(); ?>></center></a>
				<center><p class="item-shoe-name"><?php echo $tours[$i]->name ?></p></center>
				<center><p class="item-shoe-price"><?php echo $tours[$i]->getDisplayPrice() ?></p></center>
				<center><a href='model/insertCart.php?id= <?php echo $tours[$i]->id ?>'><button> Đặt tour</button></a></center>
			</div>
		<?php
			}
		?>
	</div>

	<div class="div5">
		<center>
			<marquee width="10%" ><h1 class="kieuchu1">Xách ba lô và đi</h1></marquee>
			<h1 class="kieuchu2">Khám phá ngày mới</h1>
		</center>
		
	</div>

	<div class="div6">
		<center>
			<video width="920" height="540" controls>
			 	<source src="video.mp4" type="video/mp4">
			 	<source src="video.ogg" type="video/ogg">
			</video>
		</center>
		
	</div>

	<div class="div7">
		<center>
			<marquee width="10%" ><h1 class="kieuchu1">Lập kế hoạch</h1></marquee>
			<h1 class="kieuchu2">Bay cùng lũ bạn</h1>
		</center>
	</div>

	<div class="div8">
		<div class="div8-a">
			<h2 style="color: white">Liên hệ với chúng tôi:</h2>
			<h4 style="color: white">Email: vuthuatdev@gmail.com</h4>
			<h4 style="color: white"> Sđt: 0393.229.134</h4>
			<h4 style="color: white"> Địa chỉ:  101B Lê Hữu Trác - P.Phước Mỹ - Q.Sơn Trà - TP.Đà Nẵng</h4>

		</div>
		<div class="div8-b">
			<h2 style="color: white">Tin tức mới:</h2>
			<h4 style="color: white">Có nên du lịch thái land vào mùa tết không ?</h4>
			<font color= red><br> 18 Tháng Mười Một, 2019</font>
			<h4 style="color: white">Kinh nghiệm đi du lịch bụi</h4>
			<h4 style="color: white">18 Tháng Mười Một, 2019</h4>
			<h4 style="color: white">Cần chuẩn bị gì khi đi du lịch ?</h4>
			<h4 style="color: white">18 Tháng Mười Một, 2019</h4>	
		</div>
		<div style="background: gray">
			<h1>thuat</h1>
			
		</div>	
	</div>
	<!-- <div class="div9">
		<h1>Anh background</h1>
	</div> -->


	<!-- xử lí user  -->
	<script type="text/javascript">
		function clickanh(){
			alert("a");
			var x = document.getElementById("login");
			document.wite(x);	
		}

		function clickgiohang(){
			alert("b");
		}
		function clickserch(){
			alert("b");

		}
		function clicksanpham(){
			alert("c");
		}
	</script>


	<!-- login -->
	<div id="login">
		<form>
		<input type="text" name="">
		<input type="password" name="">
		<input type="submit" name="" value="dang nhap">		
	</form>
	</div>
	
</body>
</html>