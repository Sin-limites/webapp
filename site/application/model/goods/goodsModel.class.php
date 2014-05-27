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

}
