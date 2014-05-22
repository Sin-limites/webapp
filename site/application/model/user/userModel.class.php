<?php

class userModel {
    
  public static function login($user, $pass)
  {
    $pass = md5($pass);
    
    $pdo = dbConnect::getInstance();
    
    if(empty($user) or empty($pass))
    {
      die('Niet alle velden zjin gevuld! Probeer nogmaals!');
    }

    $check = $pdo->prepare("SELECT * FROM shipy_user WHERE username = :user AND password = :pass ");
    $check->execute(array(':user' => $user, ':pass' => $pass ));
    
    if($check->rowCount() == 1) while($row = $check->fetch(PDO::FETCH_ASSOC))
    {
      $_SESSION['log'] = $row['id'];
      header('Location: /user/dashboard/');
    }
    else
    {
      die('Het opgegeven wachtwoord is verkeerd, of de gebruiker komt niet voor in de database. Probeer nogmaals!');
    }
  }
    
 
      
  public function logout()
  {
    session_destroy();
    echo '<p>Succesvol uitgelogd</p><meta http-equiv="refresh" content="2; url=/">';
  }

    
}

?>