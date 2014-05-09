<?php

$erro="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name=$_POST["name"];
	$surname=$_POST["surname"];
	$address=$_POST["address"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$id=$_POST['id'];
	if(!$address||!$email||!$name||!$password||!$surname||!$id)
	{
		echo "Provide all fields";
		exit;	
	}
	if(!preg_match("/[a-zA-Z0-9_\-.\]+@[a-zA-Z0-9\-]\.[a-zA-Z]{3,4}+$/",$email))
	{
		echo "Email should be in this format mohla90@gmail.com <a href='register.php'>Click Here</a>";
		exit;
	}
	if(!preg_match("/[0-9]{13}/",$id))
	{
		echo "ID number not valid <a href='register.php'>Click Here</a>";
		exit;	
	}
	

		require("scripts/sql_scripts.class.php");
	$obj=new sql_commands();
	$error =$obj->register($name,$surname,$address,$email,$password,$id);
	if($error >0)
	{
		echo "A user with the email address entered exists";
		exit;
	}
	echo "account created succefully <a href='user_login.php'>Click Here</a>";
	exit;
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
<div align="center" id="main">
<?php include_once("header.php"); ?>

<div id="content">
  <div align="left" style="margin:-left:24px;">  
    <p>Please fill in necessary details</p>
    <form id="form1" name="form1" method="post" action="register.php">
      <table width="200" border="0" align="center">
        <tr>
          <td>Name:</td>
          <td><input type="text" name="name" id="name" /></td>
        </tr>
        <tr>
          <td>Surname:</td>
          <td><input type="text" name="surname" id="surname" /></td>
        </tr>
        <tr>
          <td>ID number:</td>
          <td><input type="text" name="id" id="id" /></td>
        </tr>
        <tr>
          <td>Address: <br/></td>
          <td><input type="text" name="address" id="address" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input type="text" name="email" id="email" /></td>
        </tr>
        <tr>
          <td>Password: </td>
          <td><input type="password" name="password" id="password" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" value="Register" /></td>
        </tr>
      </table>
      <p><br/>
        <br/>
      </p>
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