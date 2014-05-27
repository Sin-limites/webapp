<?php

class goodsModel {
  
  /*
   * 
   */
  public static function parseData() {
   
    $pdo = dbConnect::getInstance();
     
    $locationData = $pdo->prepare("SELECT Equipment_number,Latitude,Longitude FROM p78_Goods");
   
    $locationData->execute();
   
    $returnArray = array();
    if($locationData->rowCount()){
      while($row = $locationData->fetch(PDO::FETCH_ASSOC)) {
        array_push($returnArray, $row);
      } 
    } else {
      die('er gaat iets mis');
    }
     
    return $returnArray;
   
  }
  
  /*
   * 
   */
  public static function getData() {
    $pdo = dbConnect::getInstance();
    
    $data = $pdo->prepare("SELECT * FROM p78_Goods");
    $data->execute();
    
    if($data->rowCount()){
      $return = $data->fetchAll(PDO::FETCH_ASSOC);
      return $return;
    }
    return false;
  }

}
