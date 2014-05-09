<?php
require("scripts/add_product.class.php");
$obj=new add_product();
$arr_pro="";
$id=0;

	if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$arr_pro=$obj->select_for_editing($id);
	}

if(isset($_POST['editId']))
{
	$editId=$_POST['editId'];
	$name=$_POST['proName'];
	$price=$_POST['price'];
	$descrip=$_POST['proDetails'];
	$category=$_POST['Category'];
	$subcategory=$_POST['subcategory'];
	$obj->edit($name,$price,$descrip,$category,$subcategory,$editId);
	
	header("Location: Inventory.php");
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
<title>Edit</title>

</head>

<body>
<div id="container">
	
    	<div id="main"> 
<form action="edit.php"  method="post" enctype="multipart/form-data">    
<div align="center" id="main">
<?php include_once("header.php"); ?>

<div id="content">
<br />
  <div align="left" style="margin:-left:24px;"><h1></h1>

      <div align="left" style="margin-left:24px">
      <h2>Edit</h2>
      </div>
  </div>
   
<table width="369" border="0">
  <tr>
    <td width="98">Product Name</td>
    <td width="261"> <input type="text" name="proName" value="<?php echo $arr_pro[0];?>" /></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price"  value="<?php echo $arr_pro[1];?>"/></td>
  </tr>
  <tr>
    <td>Product Details</td>
    <td><textarea name="proDetails" cols="16" rows="5"><?php echo $arr_pro[2];?></textarea></td>
  </tr>
  <tr>
    <td>Category</td>
    <td><select name="Category"  value="<?php echo $arr_pro[3];?>">
    <option value="<?php echo $arr_pro[3];?>"><?php echo $arr_pro[3];?></option>
    <option value="music">Music</option>
    <option value="music">Music</option>
    <option value="video">Video</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>SubCateogry</td>
    <td><select name="subcategory" >
    value="<?php echo $arr_pro[4];?>"
    <option value="<?php echo $arr_pro[4];?>"><?php echo $arr_pro[4];?></option>
    <option value="house">House</option>
    <option value="rnb">RnB</option>
    <option value="hipHop">HipHop</option>
    <option value="action">Action</option>
   
    <option value="comedy">Comedy</option>
    <option value="horror">Horror</option>
    <option value="histroy">Histroy</option>
    </select></td>
    <tr>
    <td><p>&nbsp;
      </p>
      <p>
      	<input type="hidden" name="editId" value="<?php echo $id; ?>" />
        <input type="submit" value="Edit Product" />
      </p></td>
  </tr>
  
</table>
      <p>&nbsp;</p>
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