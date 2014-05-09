<?php
session_start();

require("scripts/shopping_cart.class.php");


if(!isset($_SESSION["user"]))
{
	header("Location: index.php");
	session_destroy();
}

if(isset($_POST['logOut']))
{
	header("Location: index.php");	
	session_destroy();
	
}
if(isset($_POST['buy']))
{
	header("Location: order.php");	
}

$myObj=new shopping_cart();
$tabl=$myObj->order_display($_SESSION);
$total_cost=$myObj->cost();
$total=$myObj->total_cost_to_pay();



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
<title>Untitled Document</title>

</head>

<body>
<div id="container">
	
    	<div id="main"> 
<form action="check_out.php"  method="post" >
<div align="center" id="main">
<?php include_once("header.php"); ?>

<div id="content">

  <div align="left" style="margin:-left:24px;">  
  <br />
  
    <div align="right"><input type="submit" value="LogOut" name="logOut"/></div>
  <table width="92%" border="1" cellpadding="6" cellspacing="0">
<tr>
<td width="16%" bgcolor="#green"><strong>Product</strong></td>
<td width="13%" bgcolor="#green"><strong>Description</strong></td>
<td width="12%" bgcolor="#green"><strong>Price</strong></td>
<td width="14%" bgcolor="#green"><strong>Categoty</strong></td>
<td width="17%" bgcolor="#green"><strong>Sub-Category</strong></td>
<td width="12%" bgcolor="#green"><strong>Quantity</strong></td>



</tr>
<?php echo $tabl;?>

</table>
  <p>
    <input type="submit" value="Buy" name="buy"/>
    <br/>
  </p>
  <?php echo $total;?> 
  </div>
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