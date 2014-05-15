<?php

class Base {
  
  public function initialize(){
    
  }
  
  public function preDie($array) {
    die('<pre>'.print_r($array,true).'</pre>');
  }
  
}
