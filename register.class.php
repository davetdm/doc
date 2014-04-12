<?php
	
	class register{
		
		private $_name;
		private $_lname;
		private $_email;
		private $_password;
		private $_cpassword;
		private $_city;
		
		
			function __construct($name,$lname,$email, $password, $cpassword, $city){
				$this->_name = $name;
				$this->_lname = $lname;
				$this->_email = $email;
				$this->_password = $password;
				$this->_cpassword = $cpassword;
				$this->_city = $city;
		}
		
		function connect(){
				$link = mysql_connect('localhost', 'root', '');
						if (!$link) {
							die('Could not connect: ' . mysql_error());
						}
						
						$select = mysql_select_db("music");
						if (!$select) {
							die('Could not select db: ' . mysql_error());
						}

				}
		
		function create_login(){
				$query = "INSERT INTO register values('','".$this->_name."','".$this->_lname."','".$this->_email."','".$this->_password."','".$this->_cpassword.     "','".$this->_city."')";
					
				$run_query = mysql_query($query);
		}
		
	}
?>