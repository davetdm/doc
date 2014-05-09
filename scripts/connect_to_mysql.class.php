<?php 
class Connect
{
	private $localhos="localhost";
	private $username="root";
	private $passw="";
	private $data_name="e_shopping_db";
	private $db;
	public function __construct()
	{
		
	}
	
	//the method creates a connection of the database called e_shopping_db
	function connect()
	{
		$this->db=new MySQLi($this->localhos,$this->username,$this->passw,$this->data_name)or die("could not connect");
		
		return $this->db;
	}
}

?>