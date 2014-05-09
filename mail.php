<?php

require("scripts/sql_scripts.class.php");
$obj=new sql_commands();
$email="";
$error="";

if(isset($_GET['mail_id']))
{
	$email=$obj->getEmail($_GET['mail_id']);
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
		$to=$_POST['to'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];	
		$from="ngwenyaes@gmail.com";
		
	if(!$to||!$subject||!$message)
	{
		$error="Certain fields not populated well";	
	}
	else
	{
				mail($to,$subject,$message,$from);
		echo "Email sended successfully! <a href='index_admin.php'>Click here</a>";
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
<title>Home</title>

<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>

<body>
<div id="container">
	
    	<div id="main"> 
<form action="mail.php" method="post">
<div align="center" id="main">
<?php include_once("header.php"); ?>
<div id="content">
<br/>
<table width="200" border="0">
  <tr>
    <td colspan="2" align="center"><h2>SEND MAIL</h2></td>
    </tr>
  <tr>
    <td>To:</td>
    <td><input type="text" name="to" size="40"  value="<?php echo $email;?>"  readonly="readonly" /></td>
  </tr>
  <tr>
    <td>Subject:</td>
    <td><input type="text" name="subject" size="40" /></td>
  </tr>
  <tr>
    <td>Message:</td>
    <td><textarea cols="30" rows="10" name="message"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" value="Send Email" /></td>
    </tr>
</table>
<br/>
<?php echo $error;?>
  <br/>
<a href="customer_list.php">Back</a>
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
