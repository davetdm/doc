<?php
require("scripts/sql_scripts.class.php");

session_start();
$obj=new sql_commands();
$output="";
$id=0;

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$output=$obj->view_specific_product($id);		
	}
	
	
		if(isset($_POST['pid']))
		{
			$pid=$_POST['pid'];
			$_SESSION['cart_'.$pid]+=1;
			header("Location: cart.php");
		
		}

	


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css1/reset.css">
<link rel="stylesheet" href="css1/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>
<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>

<body>
<div id="container">
	
    	<div id="main"> 
<form action="product.php" method="post">
<div align="center" id="main">
<?php include_once("header.php"); ?>

<div id="content">
  <p>&nbsp;</p>
  <table width="317" border="0">
  <tr>
    <td width="20%" valign="top"><img src="proImages/<?php echo $id;?>.jpg" width="142" height="188" />
    <a href="proImages/<?php echo $id;?>.jpg">View Full Image</a>
    </td>
    
    <td width="80%" valign="top"><?php echo $output;?>
      <p>&nbsp;</p>
      
      <p><input type="hidden" name="pid" value="<?php echo $id;?>"/>
      <input type="submit" value="Add to Cart" /></p>
      
      <p>&nbsp;</p>
      <p><a href="product_list.php"><-back</a></p></td>
  </tr>
</table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>


<?php include_once("footer.php"); ?>
</div>
</form>
</div>
</div>
<script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <h1>&nbsp;</h1>
</body>
</html>
