<?php

	class Login{
		
		private $_username;
		private $_password;
		
		function __construct($username, $password){
				$this->_username = $username;
				$this->_password = $password;
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
				$query = "INSERT INTO login values('','".$this->_username."',".$this->_password."')";
					
				$run_query = mysql_query($query);
		}
		
		
	}
?>