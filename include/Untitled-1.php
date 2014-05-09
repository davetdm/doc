<h1>Cart</h1>
<?php
	if(isset($_SESSION['cart'])){
		$sql = "SELECT * FROM product WHERE product_id IN (";	
		foreach($_SESSION['cart'] as $id => $value){
			
			$sql .= $id. ",";
		}
		$sql = substr($sql,0,-1) . ") ORDER BY ASC";
		$query = mysql_query($sql);
	while($row	= mysql_fetch_array($query)){
?>	
		
	<p><?php echo $row['name']; ?><?php echo $_SESSION['cart'][$row['product_id']]['quantity'];?></p>
<a href="index.php?page=cart">Go to cart</a>
<?php 
	}
	}else {
		echo '<p> Your cart is empty. <br/>Please add some plroduct</p>';
	}

?>
