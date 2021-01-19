<?php

//Conntecting to the database.
Class Database{

	//The name of database is specified
	private $server = "mysql:host=localhost;dbname=ecomm"; 
	//The user credential are given so that the syemtem can login to the phpmyadmin
	private $username = "root";  
	private $password = "";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;
	 
	//Funtion to estanslif the connetction between the database and website.
	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
		 }
		 
		 //If there is a problem with establishing the connetion, the this will guide towards what the problem is.
 		catch (PDOException $e){
 			echo "There is some problem in connection: " . $e->getMessage();
 		}
 
    }
 
	public function close(){
   		$this->conn = null;
 	}
 
}

$pdo = new Database();
 
?>