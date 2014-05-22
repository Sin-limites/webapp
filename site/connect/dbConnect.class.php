<?php

//PDO MYSQL CONNECTION CLASS

class dbConnect
{
  private static $db = null;
  
  private function __construct()
  {
  }
  
  /**
   * Get a new database connection returns a pdo object.
   * @return PDO 
   */
  public static function getInstance()
  {
    if (self::$db === NULL)
    {
      try {
        self::$db = new PDO('mysql:dbname='.DB.';'.DB_HOST, DB_USERNAME, DB_PASSWORD);
        self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }  catch (Exception $e){
        throw new Exception($e->getMessage(), $e->getCode());
      }
    }
    
    return self::$db;
  }
}
?>
