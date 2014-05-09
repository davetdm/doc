<?php
require("sql_scripts.class.php");
class admin extends sql_commands
{
	//the method recieve the three ain parameters which contain information/ values recieved by admin_login.php and invoke the login method from sql_scripts.class.php
	function check($username,$password,$priv)
	{
		$msg="";
		if(isset($username)&&isset($password)&&isset($priv))
		{
			$msg= sql_commands::Login($username,$password,$priv);
		}
		
		
		return $msg;
	}


}
?>