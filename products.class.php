<?php


	class Products{
		private $_name;
		private $_price;
		private $_type;
		
		function __construct($name, $price, $type){
				$this->_name = $name;
				$this->_price = $price;
				$this->_type = $type; 
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
		
		function create_product(){
				$query = "INSERT INTO test values('','".$this->_name."',".$this->_price.",'".$this->_type."')";
					
				$run_query = mysql_query($query);
		}
		
		function select_product(){
			
			$query = "SELECT * from test";
			$run_query = mysql_query($query);
			}
			
			function update_product(){
				
				$query = "UPDATE test where values('','".$this->_name."',".$this->_price.",'".$this->_type."')";
				}
				
				
				function delete_product(){
				
				$query = "DELETE from test ";
				}
	}
	
	
	
	
?>