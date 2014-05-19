<?php

class userInfo
{
  protected $id;
  protected $row;
  protected $pdo;
  
  public function __construct($id)
  {
    $this->pdo = dbConnect::getInstance();
    
    $this->id = $id;
    $query = $this->pdo->query("SELECT * FROM shipy_user WHERE id = '".$this->id."' ");
    
    $this->row = $query->fetch(PDO::FETCH_ASSOC);
  }
  
  
  public function getUser()
  {
    return ucfirst($this->row['name']);
  }
  public function getUserEmail()
  {
    return $this->row['email'];
  }
  
  
  public function getRank($rank=false)
  {
    // if(empty($rank)){ 
      // $rank = $this->row['rank']; 
    // }
//     
    // switch($rank){
      // case 3:
        // $rank_title = 'Administrator';
        // break;
      // case 2:
        // $rank_title = 'Developer';
        // break;
      // default:
        // $rank_title = 'User';
        // }
    // return $rank_title;
  }  
}


?>
