<?php
require("scripts/shopping_cart.class.php");
session_start();

if(isset($_GET['add']))
{
	
	$_SESSION['cart_'.$_GET['add']]+=1;
}

if(isset($_GET['sub']))
{
	
	$_SESSION['cart_'.$_GET['sub']]--;
}

if(isset($_GET['remov']))
{
	
	$_SESSION['cart_'.$_GET['remov']]=0;
}

$obj=new shopping_cart();
$output=$obj->cart($_SESSION);
$total=$obj->total_cost_to_pay();

if(isset($_GET['clear'])&&isset($_GET['clear'])=="empty")
{
	session_destroy();
	header("Location: index.php");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css1/reset.css">
<link rel="stylesheet" href="css1/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">

<title>Cart</title>

</head>

<body>
<div id="container">
	
    	<div id="main"> 
<div align="center" id="main">
<?php include_once("header.php"); ?>

<div id="content">
<br />
<div style="margin:24px text-align:left">
<table width="98%" border="1" cellpadding="6" cellspacing="0">
<tr>
<td width="15%" bgcolor="#green"><strong>Product</strong></td>
<td width="22%" bgcolor="#green"><strong>Description</strong></td>
<td width="11%" bgcolor="#green"><strong>Price</strong></td>
<td width="11%" bgcolor="#green"><strong>Categoty</strong></td>
<td width="14%" bgcolor="#green"><strong>Sub-Category</strong></td>
<td width="10%" bgcolor="#green"><strong>Quantity</strong></td>
<td width="17%" bgcolor="#green"><strong>add/sub/remove</strong></td>


</tr>
<?php echo $output;?>


</table>
<p>
<div align="right">
  <p><a href="user_login.php">Shipping Process</a><br />
    </p>
  <p>&nbsp;</p>
  <p>&nbsp;	</p>
</div>  
  </p>
<p>&nbsp;</p>
<p><?php echo $total;?></p>
<p><br />
  <br />
  <a href=cart.php?clear=empty>Empty Shopping cart</a></p>
  <br />
</div>
 </div>
<?php include_once("footer.php"); ?>
</div>
</div>
</div>
<script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <h1>&nbsp;</h1>
</body>
</html>
