<?php

class user extends mvc{
      
    public function __construct()
    {
        $this->loadModel('userModel');
        // Check if the session exists. If it doesnt go to the login form.
        if(!isset($_SESSION['log'])){
          $this->login('');
          exit;
        }
    }
    
    /*
     * Deze moet verschillend aangeroepen kunnen worden,
     */
    public function index($data)
    {
      $this->loadView(get_class($this) . $this->view . 'index',$data);
    }
    
    public function login($data)
    {
      $this->loadView(get_class($this) . $this->view . 'login',$data);
      if(isset($_POST['submit'])){ 
        $userlogin = userModel::login($_POST['username'], $_POST['password']);
      }
    }
    
    public function dashboard($data)
    {
      $this->loadView(get_class($this) . $this->view . 'dashboard',$data);
    }
    
    public function logout(){
      $this->userModel->logout();
    }
    
}


?>
