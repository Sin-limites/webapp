<?php

class map extends mvc{
  
  public function __construct() {
        $this->loadModel('mapModel');
    }
  
  /*
   * 
   */
  public function view($data) {
    $this->loadView(get_class($this) . $this->view . 'view',$data);
    
    $locationData_js = 'lol';
  }
  
}
  