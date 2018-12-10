<?php
class Admin extends Controller{
	function __construct(){
		parent::__construct();
		
	}
	public function home(){
		$this->load->view("admin/layout");
	}
}

?>