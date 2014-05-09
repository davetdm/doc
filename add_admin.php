<?php
session_start();

require("scripts/sql_scripts.class.php");
$obj=new sql_commands();

if(!isset($_SESSION['manager']))
{
	header("Location: admin_login.php");	
	session_destroy();
	exit;	
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$privilages=$_POST['privilages'];
	
	if(!$username||!$password||!$privilages)
	{
		echo "Please make sure infromation is entered in all the fields <a href='add_admin.php'>Click Here</a>";
		exit;
	}
	else
	{
		$obj->add_admin($username,$password,$privilages);	
				echo "Admin successfully registered <a href='index_admin.php'>Click Here</a>";
		exit;
	}
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="css1/reset.css">
<link rel="stylesheet" href="css1/style.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Admin</title>
 <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
 
</head>

<body>
<div id="container">
	
    	<div id="main"> 
        
<form action="add_admin.php" method="post">
<div align="center" id="main">
<?php include_once("header.php"); ?>
<div id="content">
<h2>Add New Admins</h2>
<br/>
<table width="200" border="0">
  <tr>
    <td>Username:</td>
    <td><input type="text" name="username" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" /></td>
  </tr>
  <tr>
    <td>Privilages</td>
    <td><select name="privilages">
      <option></option>
      <option value="superadmin">superadmin</option>
      <option value="admin">admin</option>
      </select>
    </td>
  </tr>
</table>
<br/>
<input type="submit" value="Add Admin" />
<br/>
<br/>
<a href="index_admin.php">Back</a>
<br/>
</div>
<?php include_once("footer.php"); ?>
</div>
</div>
</div>
</form>

<script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <h1>&nbsp;</h1>
</body>
</html>