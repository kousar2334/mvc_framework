<?php
class Database extends PDO{
	function __construct($con,$user,$pass){
		parent::__construct($con,$user,$pass);
		
	}
	public function select($table_name){
      $query="select * from $table_name";
      $sql=$this->prepare($query);
      $sql->execute();
      return $sql->fetchAll();
	}
}
?>