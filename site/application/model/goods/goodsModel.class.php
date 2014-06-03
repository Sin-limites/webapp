<?php

class goodsModel {
  
  /*
   * 
   */
  public static function containerLocationData() {
    $data = file_get_contents('http://145.24.222.137:8080/RestService/rest/location/get/'); 
    $data = json_decode($data);
     
    return $data;
  }
  
  /*
   * 
   */
  public static function getData() {
    $data = file_get_contents('http://145.24.222.137:8080/RestService/rest/container/get/');
    $data = json_decode($data);
    
    return $data;
  }
  
  public static function loadStowageDetail($id) {
    //
  }
  
  public static function loadContainerDetail($id) {
    $data = file_get_contents('http://145.24.222.137:8080/RestService/rest/container/get/'.$id.'/');
    $data = json_decode($data);
    
    return $data;
  }
  
  public static function loadShipDetail($id) {
    $data = file_get_contents('http://145.24.222.137:8080/RestService/rest/ship/get/'.$id.'/');
    $data = json_decode($data);
    
    return $data;
  }

}
