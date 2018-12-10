# mvc_framework
This is a simple MVC framework in php.This framework contains the model view and controller.
# setup
Go to the lib/Model.php directory and setup database name, server name , user and password


	function __construct(){
		$con='mysql:host=server;dbname=database name';
		$user='user';
		$pass='password';
		$this->db=new Database($con,$user,$pass);
	}
	
  
  Go to the lib/config.php directory and setup base_url
  
  define('BASE_URL','http://localhost/mvc');

# create Controller 
Go the the 
App/controller directory and create a php class for controller that extends Controller class


	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view("welcome");
	}
  
  # create model
  Go to the App/models directory and create a php class for model that extends Model class
  
   function __construct(){
		parent::__construct();
	 }
	  public function viewData(){
	  return $this->db->select('thana');
     
	}
  
  # Load View
  
  	public function functionName(){
		$this->load->view("Directory/sub directory/fileName");
	  }
  
   # Load model
   
   public function functionName(){
			$variable=$this->load->model('modelName');
      $data=$variable->viewData();
		  $this->load->view("data",$data);
	}
   
