<?php
session_start();

$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
$data="";
$text="";

	$fp=fopen("letter.txt",'rb');
	while(!feof($fp))
	{
		$text.=fgets($fp);
	}
	fclose($fp);
	
if(!isset($_SESSION['admin']))
{
	header("Location: admin_login.php");	
	session_destroy();

}

if(isset($_POST['logOut']))
{
	header("Location: admin_login.php");	
	session_destroy();
}
	
if(isset($_POST['update']))
{
	if($_POST['newsletter'])
	{
		$text=$_POST['newsletter'];
		$data=$text;
		$fp=fopen("letter.txt",'w');
		fwrite($fp,$data,strlen($text));	
		fclose($fp);
		echo "News upadted successfully! <a href='myadmin.php'>Click here</a>";
		exit;
	}
	else
	{
		echo "Please write the text to update the news <a href='myadmin.php'>Click here</a>";	
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
<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<title>News Updates</title>


</head>

<body>
<div id="container">
	
    	<div id="main"> 
<form action="myadmin.php" method="post">
<div align="center" id="main">
<?php include_once("header.php"); ?>
<div id="content">
<br/>
<strong>LATEST NEWS UPDATES</strong><br/>
<div align="right"><input type="submit" value="logOut" name="logOut"/></div>
<br/>
<textarea name="newsletter" cols="35" rows="20"><?php echo $text; ?></textarea>
<br/>
<br/>
<input type="submit" value="update news" name="update"/>
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
