<?php

require("scripts/add_product.class.php");
$obj=new add_product();

session_start();
if(!isset($_SESSION['manager']))
{
	header("Location: admin_login.php");	
	session_destroy();
	exit;	
}

if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	echo "Do you want to delete the following product with an id of '$id'? "."<a href='Inventory.php?yes=$id'>yes</a>"." || "."<a href='Inventory.php?no=$id'>No</a>";
	exit;

}
	if(isset($_GET['yes']))
	{
		$id_del=$_GET['yes'];
		$obj->del($id_del);	
	}

if($_SERVER['REQUEST_METHOD']=="POST")
{
	
$name=$_POST['proName'];
$price=$_POST['price'];
$descrip=$_POST['proDetails'];
$category=$_POST['Category'];
$subcategory=$_POST['subcategory'];
//$file=$_POST['fileField'];



$id =$obj->add($name,$price,$descrip,$category,$subcategory);
$newname="$id.jpg";
move_uploaded_file($_FILES["fileField"]["tmp_name"],"proImages/$newname");
}
$out=$obj->all();

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
<title>Inventory List</title>

</head>

<body>
<div id="container">
	
    	<div id="main"> 
<div align="center" id="main">
<?php include_once("header.php"); ?>

<div id="content">
<br />
  <div align="left" style="margin:-left:24px;"><h1></h1>

      <div align="left" style="margin-left:24px">
      <h2>Inventory List</h2>
	<?php echo $out;?>
      </div>
  </div>
<form action="Inventory.php" method="post" enctype="multipart/form-data">        

<table width="369" border="0">
  <tr>
    <td width="98">Product Name</td>
    <td width="261"> <input type="text" name="proName" /></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price" /></td>
  </tr>
  <tr>
    <td>Product Details</td>
    <td><textarea name="proDetails" cols="16" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Category</td>
    <td><select name="Category">
	<option value></option>
    <option value="music">Music</option>
    <option value="music">Music</option>
    <option value="movies">Movies</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>SubCateogry</td>
    <td><select name="subcategory">
	<option value></option>
    <option value="rnb">Rnb</option>
    <option value="hiphop">HipHop</option>
    <option value="house">House</option>
    <option value="action">Action</option>
    <option value="romance">Romance</option>
    <option value="adventure">Adventure</option>
    <option value="horror">Horror</option>
	 <option value="sport">Sport</option>
	 
	</select></td>
  </tr>
  <tr>
    <td>Product Image</td>
    <td><p>
      <input type="file" name="fileField" />
    </p>
   </td>
  </tr>
    <tr>
    <td><p>&nbsp;
      </p>
      <p>
        <input type="submit" value="Save Product" />
      </p></td>
  </tr>
</table>
  </form> 
  <br/>
<a href="index_admin.php">Back</a>
<br/>
<br/>
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
