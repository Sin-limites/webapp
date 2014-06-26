<?php

class goodsModel {
  /*
   * 
   */
  public static function containerLocationData() {
    $data = file_get_contents('http://145.24.222.137:8080/Rebuild/rest/location/get/'); 
    $data = json_decode($data);
    $data = $data;
     
    return $data;
  }
  
  /*
   * 
   */
  public static function getData($order, $flow) {
  
	if ($flow != "asc" && $flow != "desc")
		$flow = "";
		
	if ($order != "equipmentNumber" && $order != "handlingID" && $order != "packagingID" && $order != "consignmentNumber" && $order != "uno"
	&& $order != "imo" && $order != "flashpoint" && $order != "stowagePosition" && $order != "quantityincontainer" 
	&& $order != "weight" && $order != "portofdischarge" && $order != "terminal")
		$order = "";
		
	if ($order == "")
		$data = file_get_contents('http://145.24.222.137:8080/Rebuild/rest/container/get/');
	else
		$data = file_get_contents('http://145.24.222.137:8080/Rebuild/rest/container/get/?order='.$order.'&order='.$flow);
		
    $data = json_decode($data);
    
    return $data;
  }
  
  public static function loadStowageDetail($id) {
    //
  }
  
  public static function loadContainerDetail($id) {
    $data = file_get_contents('http://145.24.222.137:8080/Rebuild/rest/container/get?equipmentnumber='.$id);
    $data = json_decode($data);
    
    return $data;
  }

}
