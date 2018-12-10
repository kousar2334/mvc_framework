<?php
class UserModel extends Model{
	function __construct(){
		parent::__construct();
	}
	public function viewData(){
    
	  return $this->db->select('thana');
    
      
	}
}


?>