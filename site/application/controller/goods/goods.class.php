<?php

class goods extends mvc{
    
  public function __construct() {
        $this->loadModel('goodsModel');
    }
  
  /*
   * 
   */
  public function index($data) {
    $this->loadView(get_class($this) . $this->view . 'map',$data);
  }
  
  /*
   * 
   */
  public function map($data) {
    $this->loadView(get_class($this) . $this->view . 'map',$data);
  }
  
  /*
   * 
   */
  public function datalist($data) {
    $this->loadView(get_class($this) . $this->view . 'list',$data);
  }
  
  
  /*
   * 
   */
  public function getAllData() {
    return goodsModel::getData();
  }
  
  /*
   * 
   */
  public function getLocationData() {
    return json_encode(goodsModel::parseData());
  }
  
}
  