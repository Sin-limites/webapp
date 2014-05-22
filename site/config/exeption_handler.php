<?php

 function exception_handler($exception) 
{
  echo "Uncaught exception: " , $exception->getMessage(), "\n";
  
  echo '<div style="border:1px solid black;">';
    echo '<pre>';
      echo var_export(debug_backtrace());
    echo '</pre>';
  echo '</div>';
}

?>
