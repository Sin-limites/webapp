<?php

class mvc{
    
    public $uri;
    public $model;
    protected $view = '/';
    
    /*
     * 
     */
    public function __construct($uri)
    {
        $this->uri = $uri;
        // Check if the session exists. If it doesnt go to the login form.
        if(!isset($_SESSION['log'])){
          $user = new user(); //Create user object
          $user->login(''); //Redirect to the login function
          exit;
        }
    }
    
    /*
     * 
     */
    public function loadController($class)
    {
      $data = "";
    
      $controller = new $class();
      
      if(method_exists($controller, $this->uri['method'])){
          $controller->{$this->uri['method']}($this->uri['var']);
      }else{
          $controller->index($data);
      }
    }
    
    /*
     * 
     */
    public function loadView($view,$vars="")
    {
        if(is_array($vars) && count($vars) > 0)
            extract($vars, EXTR_PREFIX_SAME, "wddx");
        
        require_once('view/'.$view.'.php');
    }
  
    /*
     * 
     */
    public function loadModel($model)
    {
        $this->$model = new $model;
    }
    
}

?>
