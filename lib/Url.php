<?php
class Url{
	public $url="";
	public $controllerName='';
	public $methodName="";
	public $controllerPath="app/controller/";
	public $controller="";

	public function __construct(){
   $this->getUrl();
   $this->loadController();
   $this->callMethod();
	}

	public function getUrl(){
    $this->url=isset($_GET['url']) ? $_GET['url']:NULL;
    if($this->url!=NULL)
    {
	$this->url=rtrim($this->url,'/');
	$this->url=explode("/",filter_var($this->url,FILTER_SANITIZE_URL) );
    }else{
    	unset($this->url);
         }
	}
    
    public function loadController()
    {
    	if (!isset($this->url[0])) {
    	  include 'app/controller/Index.php';
  		  $index=new Index();
          $index->index();
    	}else{
    		$this->controllerName=$this->url[0];
    		$fileName=$this->controllerPath.$this->controllerName.'.php';
    		if (file_exists($fileName)) {
    			include $fileName;
    			if (class_exists($this->controllerName)) {
    			$this->controller=new $this->controllerName();
    			}else{
    				echo"class not exit";
    			}
    		}else{
    			echo"File not exit";
    		}
    	}
    }

    public function callMethod()
    {
    	if (isset($this->url[2])) {
    	  $this->methodName=$this->url[1];
    	  if (method_exists($this->controller,$this->methodName)) {
    	  	$this->controller->{$this->methodName}($this->url[2]);
    	  }else{
    	  	echo"method not exit";
    	  }
    	}else{
    	if (isset($this->url[1])) {
    	  $this->methodName=$this->url[1];
    	  if (method_exists($this->controller,$this->methodName)) {
    	  	$this->controller->{$this->methodName}();
    	  }else{
    	  	echo"method not exit";
    	  }
    	}	
    	}
    }



}

?>