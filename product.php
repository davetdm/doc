<?php

require_once "products.class.php";

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$price = $_POST['price'];
	$type = $_POST['type'];
	
	$prod = new Products($name, $price, $type);
	$prod->connect();
	$prod->create_product();
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

 <form method="post" >
<input name="name" type="text" class="form-control" />
<input name="price" type="text" class="form-control" />
<input name="type" type="text" class="form-control" />
<input name="submit" type="submit" class="form-control" />
            </form>
            
       
</body>
</html>