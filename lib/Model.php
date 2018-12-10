<?php 
class Model{
	protected $db=array();

	function __construct(){
		$con='mysql:host=localhost;dbname=test';
		$user='root';
		$pass='';
		$this->db=new Database($con,$user,$pass);
	}
	
}

?>