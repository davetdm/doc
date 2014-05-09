<?php
session_start();

require("scripts/shopping_cart.class.php");
$myObj=new shopping_cart();
$tabl=$myObj->order_display($_SESSION);
$total_cost=$myObj->cost();
$total=$myObj->total_cost_to_pay();

if($_SERVER['REQUEST_METHOD']=="POST")
{
	
	
$credit=$_POST["credit"];
$amount=$_POST["amount"];
if(isset($credit)&& isset($amount))
{
	if(!preg_match("/[0-9]{16}/",$credit))
	{
		echo "Credit number not valid <a href='order.php'>Click Here</a>";
		exit;	
	}
	
	if($total_cost==0)
	{
		session_destroy();
		echo "Your shopping card is empty so u can't do any of the transaction so you will be logged out <a href='index.php'>Click Here</a>";	
		exit;	
	}
	
	
	
	if($total_cost >= $amount)
	{
		 
		 $new_id=$myObj->order($_SESSION["id"],$total_cost,$amount);
		 $myObj->order_items($new_id,$_SESSION);
		 session_destroy();
		  echo "Order successfully processed. You will be notifyed on your email out your products... You will be locked out by the security of the system... Thanks <a href='check_out.php'>Click Here</a>";
		  exit;
	}
	else
	{
		echo "You dont have enough cash for you to pay for products <a href='order.php'>Click Here</a>";	
		exit;
	}
	
	
	}
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css1/reset.css">
<link rel="stylesheet" href="css1/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>

<body>
<div id="container">
	
    	<div id="main"> 
<form id="form1" name="form1" method="post" action="order.php">
<div align="center" id="main">
<?php include_once("header.php"); ?>

<div id="content">

  <div align="center" style="margin:-left:24px;">  
    <p>Please provide neccessary information</p>
    
  	  <table width="242" border="0">
  	    <tr>
  	      <td width="78">Total Cost:            </td>
  	      <td width="148"><input name="Cost" type="text" id="cost" value="<?php echo $total_cost; ?>" readonly="readonly" size="4"/></td>
	      </tr>
  	    <tr>
  	      <td>Credit Card No:</td>
  	      <td><input type="text" name="credit" id="credit" /></td>
	      </tr>
  	    <tr>
  	      <td>Amount:</td>
  	      <td><input type="text" name="amount" id="amount" /></td>
	      </tr>
  	    <tr>
  	      <td>&nbsp;</td>
  	      <td><input type="submit" value="Order" /></td>
	      </tr>
	    </table>
  	  <p>&nbsp;</p>
  	  <p><br/>
  	    <br/>
  	    <br/>
        <a href="check_out.php">Back</a>
  	    <br/>
  	    <br/>
  	    <br/>
  	  </p>
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