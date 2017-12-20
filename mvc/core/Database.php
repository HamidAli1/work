<?php 
class Database{
	
	private $conn;
	private static  $_instance;
	private $servername = "localhost";
	private $username = "root";
	private $password = "123";
	private $dbname = "HamidDB";

	private function __clone() { }

	private function __construct()
	{
		
		$this->conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);
		// Check connection
		if ($this->conn->connect_error) 
		{
    		die("Connection failed: " . $this->conn->connect_error);
		} 

	}
 	public static function getInstance()
 	{
  
        	if (!self::$_instance) {
        		 self::$_instance = new self();
        	}

    	    return  self::$_instance;
 	}

	public function getConnection() {
		return $this->conn;
	}

}



 
    
   

?>