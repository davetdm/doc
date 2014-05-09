<?php
session_start();

if(!isset($_SESSION['manager']))
{
	header("Location: admin_login.php");	
	session_destroy();
	exit;	
}

if($_SERVER['REQUEST_METHOD']=="POST")
{

	header("Location: admin_login.php");
	session_destroy();
}

	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css1/reset.css">
<link rel="stylesheet" href="css1/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>

<body>
<div id="container">
	
    	<div id="main"> 
        
<form action="index_admin.php" method="post">
<div align="center" id="main">
<?php include_once("header.php"); ?>

<div id="content">
<br />
      <div align="right" style="margin-left:24px">
      <input type="submit"  value="LogOut" />
      </div>
  <div align="left" style="margin:-left:24px;"><h2>Welcome Admin, what wil you want do?</h2>

      <div align="left" style="margin-left:24px">
      <h2><a href="Inventory.php">Inventory List</a></h2><h2><a href="customer_list.php">Current Customer's and Admin's List</a>      </h2>
      <h2><a href="add_admin.php">Add new admin</a></h2></div>
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
