<?php

require("scripts/sql_scripts.class.php");
$obj=new sql_commands();
$msg="";
$dis_music=$obj->select_for_music();
$dis_music=$obj->select_for_music();
$dis_movie=$obj->select_for_movies();

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$search=$_POST['search'];
	
	$result=$obj->search($search);
	if($result>0)
	{
		$msg="Product your looking for exist!! <a href=result_search.php?id=$result>View Results</a>";
	}
	else
	{
		$msg="Product doesn't exist!!";
	}
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css1/reset.css">
<link rel="stylesheet" href="css1/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CD & DVD</title>

 <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
 
</head>

<body>
<div id="container">
	
    	<div id="main"> 
        

<div align="center" id="main">
<div align="center" id="main">
<?php include_once("header.php"); ?>
<form action="product_list.php" method="post">
<div id="content">


  <p>Search by name:
    <input type="text" name="search" /><input type="submit" value="Search" /></p>
  <p><?php  echo $msg;?></p>
  <table width="539" height="324" border="2">
  <tr>
    <td height="18" bgcolor="#green">Music</td>
    <td height="18" bgcolor="#green"></td>
    <td bgcolor="#green">Movies</td>
  </tr>
  <tr>
    <td><?php  echo $dis_music;?></td>
    <td> <h1>&nbsp;</h1></td>
    <td><?php  echo $dis_movie;?></td>
  </tr>
</table>
  <p>&nbsp;</p>
   <p></p>
</div>
</form>
<?php include_once("footer.php"); ?>
</div>
</div>
</div>
</div>
 <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <h1>&nbsp;</h1>
  
</body>
</html>
	