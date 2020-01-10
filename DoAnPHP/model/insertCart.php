<?php 
	session_start();
?>
 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php 
	require 'database.php';
	require "Vietnam.php";
	require "Nuocngoai.php";

	$idproduct = $_GET['id'];
    $newproduct= array();
    if(isset($_SESSION['cart'])){
		$newproduct = json_decode($_SESSION['cart'],true);
	 		for($i = 0; $i < count($result); $i++) {
		 		if ( $result[$i]['id'] == $idproduct) {
		  	 		array_push($newproduct, new Vietnam($result[$i]['id'], $result[$i]['nametour'], $result[$i]['price'],$result[$i]['imge']));
		  }
	}
    }else{
    	$newproduct= array();
    		for($i = 0; $i < count($result); $i++) {
		 		if ( $result[$i]['id'] ==$idproduct) {
		  	 		array_push($newproduct, new Nuocngoai($result[$i]['id'], $result[$i]['nametour'], $result[$i]['price'],$result[$i]['imge']));
		  }
	}
    }
     // echo json_encode($newproduct);
	$_SESSION['cart'] = json_encode($newproduct);

 ?>
	<table class="table table-dark">
  		<thead>
    		<tr>
			    <th scope="col">#</th>
			    <th scope="col">IMGE</th>
			    <th scope="col">ADDRESS</th>
			    <th scope="col">PRICE</th>
			    <th scope="col">HANDLE</th>
    		</tr>
  		</thead>
  		<tbody>
  			<?php
				$new=json_decode($_SESSION['cart'],true);
				for($i = 0; $i < count($new); $i++){
			?>
    		<tr>
    			
      			<th scope="row"><?php echo $i+1?></th>
      			<td>	
					<img width="300px" class="item-shoe-icon" src=<?php echo "../imge/".$new[$i]['imge'].".jpg"?>>
				</td>
				<td>
					<p class="item-shoe-name"><?php echo $new[$i]['name'] ?></p>
				</td>
				<td>
					<p class="item-shoe-price"><?php echo $new[$i]['price'] ?></p>
				</td>
      			<td>
      				<a href=""><button>Edits</button></a>
      				<a href="deletetour.php?id= <?php echo $new[$i]['id'] ?>"><button>Delete</button></a>

      			</td>
      			
    		</tr>
    		<?php
				}
			?> 
    	
  		</tbody>

	</table>
	

</body>
</html>

