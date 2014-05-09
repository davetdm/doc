<?php

require("scripts/sql_scripts.class.php");
$obj=new sql_commands();

session_start();
if(!isset($_SESSION['manager']))
{
	header("Location: admin_login.php");	
	session_destroy();
	exit;	
}

if(isset($_GET['del']))
{
	$obj->deleteUser($_GET['del']);	
}

if(isset($_GET['delAdmin']))
{
	$obj->deleteAdmin($_GET['delAdmin']);	
}
$current_user=$obj->getAllCustomers();
$current_admins=$obj->getAllAdmin();


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
<title>Home page</title>


</head>

<body>
<div id="container">
	
    	<div id="main"> 
<form action="customer_list.php" method="post">
<div align="center" id="main">
<?php include_once("header.php"); ?>
<div id="content">
<br/>
<h2>Customers and Admins Registered </h2>
<br/>
<table width="826" border="1">
  <tr>
    <td width="476"><strong>Customers Registered</strong></td>
    <td width="334"><strong>Admins Registered</strong></td>
  </tr>
  <tr>
    <td><?php echo $current_user;?></td>
    <td><?php echo $current_admins;?></td>
  </tr>
</table>

<br/>
<a href="index_admin.php">Back</a>
<br/>
<br/>
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
