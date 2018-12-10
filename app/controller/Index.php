<?php 
class Index extends Controller{
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view("welcome");
	}
	
	public function data(){
		$user=$this->load->model('UserModel');
		$data=$user->viewData();
		$this->load->view("data",$data);
	}
}

?>