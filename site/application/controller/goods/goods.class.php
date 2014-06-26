<?php

class goods extends mvc{
  public $order;
  public $flow;
	
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
  public function stowageDetail($data) {
    $this->loadView(get_class($this) . $this->view . 'stowageDetail',$data);
  }
  
  /*
   * 
   */
  public function containerDetail($data) {
    $containerdetail = goodsModel::loadContainerDetail($data[0]);
    $data['containerdetail'] = $containerdetail[0];
    
    $this->loadView(get_class($this) . $this->view . 'containerDetail',$data);
  }
  
  /*
   * 
   */
  public function getAllData() {
    return goodsModel::getData($this->order, $this->flow);
  }
  
  /*
   * 
   */
  public function getContainerLocationData() {
    return json_encode(goodsModel::containerLocationData());
  }
  
}
  