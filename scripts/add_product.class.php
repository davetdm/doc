<?php
require("scripts/sql_scripts.class.php");
class add_product extends sql_commands
{
	//this method recieves 5 parameters from inventory.php form and invoke the method add_pro from sql_scripts.class.php and insert the information in the database
	function add($name,$price,$descrip,$category,$subcategory)
	{
		$obj=new sql_commands();
		$id=0;
		if(isset($name)&&isset($price)&&isset($descrip)&&isset($category)&&isset($subcategory))
		{
			$id=$obj->add_pro($name,$price,$descrip,$category,$subcategory);	
		}
		else
		{
			$id= "Fields not proparly filled <a href='../Inventory.php'>Click Here</a>";	
			exit;
		}
		return $id;
	} 
	
	//this method return all products stored in a database by invoking a method from sql_scripts.class.php called select_all_productc and sends the information to inventory.php
	function all()
	{
		$obj=new sql_commands();
		return $obj->select_all_products();
	}
	
	//this method delete recieves an id of a product from inventory form and sends it to a method called delete in sql_scripts.class.php and remove the information and this method del removes the image and the information from the product_list form
	function del($id)
	{
		$obj=new sql_commands();
		$obj->delete($id);
		$pic_del=("proImages/$id.jpg");		
		
		if(file_exists($pic_del))
		{
			unlink($pic_del);	
		}
	}
	
	//this meethod recieve an id of a product from inventory.php and invoke a method called select_for_editing in sql_scripts.class.php and returns the informatio to the edit.php form
	function return_for_edit($id)
	{
		$arr="";
		$obj=new sql_commands();
		$arr=$obj->select_for_editing($id);
		return $arr;
	}
	//the method edit the information recieved fro the edit.php form
	function edit($name,$price,$descrip,$category,$subcategory,$id)
	{
		$obj=new sql_commands();
		$obj->edit_rec($name,$price,$descrip,$category,$subcategory,$id);
	}
	
}


?>