<?php

	$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
	$text="";
	$fp=fopen("letter.txt",'rb');
	while(!feof($fp))
	{
		$text.=fgets($fp)."<br>";
	}
	fclose($fp);


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
        
<form action="index.php" method="post">
<div align="center" id="main">
<?php include_once("header.php"); ?>
<div id="content">
<br/>
<table width="653" border="0">
  <tr>
    <td height="59" colspan="3" align="center"><strong>Welcome to TS Music  Movies  store</strong></td>
    </tr>
  <tr>
    <td width="247"><strong>News</strong></td>
    <td width="91" rowspan="2">&nbsp;</td>
    <td width="301" rowspan="2" valign="top">We offer the best movies,and music to our customers,and we give customers the latest trends in categories like new movie and music.We make our customers the first priority in giving them what they ask for and we try to satisfy their needs and expectations.We offer free shipment and delivery to our customers.We are a business that is physcial located in pretoria.Our customers can use this site to place they orders.</td>
  </tr>
  <tr>
    <td><?php echo $text;?></td>
  </tr>
  </table>


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