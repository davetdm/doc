<?php
session_start();

if(isset($_SESSION['user']))
{
	header("Location: order.php");	
	exit;
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
	
	$user=$_POST['email'];
	$password=$_POST['password'];
	if(!$user||!$password)
	{
		echo "Please enter name and password";	
		exit;
	}
	require("scripts/sql_scripts.class.php");
	$obj=new sql_commands();
	//$obj->connect();
	$value=$obj->user_login($user,$password);
		if($value>0)
		{
			
		$_SESSION["user"]=$user;
		$_SESSION["id"]=$value;
		header("Location: check_out.php");
		exit;
		}else
		{
			echo 'The information is incorrect  ';
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
<title>Login</title>
<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<div id="container">
	
    	<div id="main"> 
<div align="center" id="main">
<?php include_once("header.php"); ?>

<div id="content">
  <div align="right" style="margin:-left:24px;">  
    <p>Please provide your Details
     </p>
    
    <form id="form1" name="form1" method="post" action="user_login.php">
      Email:
      <input type="text" name="email" id="email" />
      <br/>
      <br/>
      Password:
      <input type="password" name="password" id="password" />
      <br/>
      <br />
      <br/><input type="submit" value="Login" />
      <br/>
       <br/>
      <a href="register.php">Create an account</a>
</form>
    <h2> </h2>
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