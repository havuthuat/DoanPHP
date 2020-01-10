<!-- <?php 
	require 'insertCart.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>
	</title>
</head>
<body>
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
</html> -->