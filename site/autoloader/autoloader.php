<?php

autoloader::autoload();

/**
 * 
 * @author: Michel Roovers
 */
class autoloader
{
  private static $includedFiles = array();
  private static $classes       = array();
  private static $includeFiles  = array('.config.', '.inc.');

  /**
   * This function starts the actual autoloading
   * @return void()
   */
  public static function autoload()
  {
    self::spiderSources();
    self::initialize();
  }

  /**
   * This function registers this class for handling the autoloading
   * This will only work from PHP 5.1.2 and later!
   * @return void()
   */
  private static function initialize()
  {
    spl_autoload_register('autoloader::loadClass');
  }

  /**
   * This function will recursively walk through the project folders to find all important files.
   * @return void()
   */
  private static function spiderSources()
  {
    $path         = dirname(__FILE__)."/../..";
    $load_files   = self::getFiles($path);

    foreach($load_files as $files) {
      foreach($files as $entry) {
        $skipFile = true;

        foreach(self::$includeFiles as $includeFile) {
          if(strpos($entry, $includeFile) !== false) {
            $skipFile = false;
          }
        }

        if(!$skipFile) {
          self::includeFile($entry);
        }
        else {
          self::$classes[self::extractClassName($entry)] = $entry;
        }
      }
    }
  }

  /**
   * This function will actually check the excistance of an class
   * @param $name of the class to load
   * @return void()
   * EDITED---asc
   */
  public static function loadClass($name)
  {
    if(array_key_exists($name, self::$classes)) {
       echo 'Current class: <b>'.$name.' ----></b> ';
      self::includeFile(self::$classes[$name]);
    }else{
      echo 'failed to load class';
    }
  }

  /**
   * This function will extract the name of the class based on the filename
   * @param $fileName name of the class file to exctract de name from
   * @return String containing the extracted class name
   */
  private static function extractClassName($fileName)
  {
    $fileNameRaw = explode('/', $fileName);
    $fileNameRaw = array_pop($fileNameRaw);
    $fileNameRaw = explode('.', $fileNameRaw);
    return array_shift($fileNameRaw);
  }

  /**
   * This function will handle the actial inclusion of an file
   * @param  $file name of the file to include
   * @return void()
   */
  public static function includeFile($file)
  {
    if(!in_array($file, self::$includedFiles)) {
      self::$includedFiles[] = $file;
      include_once $file;
    }
  }

  /**
   * This function retrievs all the files from an recursive tree structure
   * @param $path where to look for files
   * @return array($baseFiles, $files) $baseFiles should be included before the actual files
   */
  private static function getFiles($path)
  {
    if(!is_dir($path)) {
      return;
    }

    $baseFiles = array();
    $files     = array();
    $fd        = dir($path);
    
    $includeFiles = array('.class.', '.config.');
    
    while(($entry = $fd->read()) !== false) {
      if(in_array($entry, array('.', '..'))) {
        continue;
      }

      if(is_dir($path.'/'.$entry)) {
        $entrys    = self::getFiles($path.'/'.$entry);
        $files     = array_merge($files, $entrys[1]);
        $baseFiles = array_merge($baseFiles, $entrys[0]);
      }
      else {
        $file = $path.'/'.$entry;

        $skipFile = true;

        foreach($includeFiles as $includeFile) {
          if(strpos($file, $includeFile) !== false) {
            $skipFile = false;
          }
        }
        
        if($skipFile) {
          continue;
        }
  
        if(pathinfo($file, PATHINFO_EXTENSION) == 'php') {
          if(strpos($file, '.baseClass.') === false) {
            $files[] = $file;
          }
          else {
            $baseFiles[] = $file;
          }
        }
      }
    }
  
    return array($baseFiles, $files);
  }
}
 