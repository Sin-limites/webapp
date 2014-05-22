<?php

class map extends mvc{
    
  public function __construct() {
        $this->loadModel('mapModel');
    }
  
  /*
   * 
   */
  public function index($data) {
    $this->loadView(get_class($this) . $this->view . 'index',$data);
  }
  
  /*
   * 
   */
  public function getLocationData() {
    // die('lol');
    return json_encode(mapModel::parseData());
  }
  
}
  