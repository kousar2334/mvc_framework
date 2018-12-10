<?php 
class Load{
	function __construct(){
		
	}
	public function view($filename,$data=NULL){
     include 'app/view/'.$filename.'.php';
	}
	public function model($filename){
     include 'app/models/'.$filename.'.php';
     return new $filename();
	}
}

?>