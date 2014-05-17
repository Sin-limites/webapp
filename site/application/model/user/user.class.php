<?php

class user{
    
  public static function login($user, $pass) {
    
    $pass = sha1($pass);
    
    $ip = $_SERVER['REMOTE_ADDR']; 
    
    $pdo = dbConnect::getInstance();

    echo '<p class="errorlog">';

    if(empty($user) or empty($pass))
    {
      die('Niet alle velden zjin gevuld! Probeer nogmaals!');
    }

//    $check = $pdo->query("SELECT * FROM users WHERE username = '".$user."' AND password = '".$pass."' ");
    $check = $pdo->prepare("SELECT * FROM users WHERE email = :user AND password = :pass ");
    $check->execute(array(':user' => $user, ':pass' => $pass ));
    
    if($check->rowCount() == 1) while($row = $check->fetch(PDO::FETCH_ASSOC))
    {
      $_SESSION['log'] = $row['id'];
      $_SESSION['rank'] = $row['rank'];
      $pdo->query("INSERT INTO user_log (user,login_datetime,method,ip) VALUES ('".$row['id']."', '".date("Y-m-d H:i:s")."', 'login', '".$ip."')");
      $pdo->query("UPDATE users SET last_login='".date("Y-m-d H:i:s")."' WHERE id = '".$row['id']."' ");
      header('Location: /user/dashboard/');
    }
    else
    {
      die('Het opgegeven wachtwoord is verkeerd, of de gebruiker komt niet voor in de database. Probeer nogmaals!');
    }
    echo '</p>';
  }
  
      
  public function logout()
  {
    session_destroy();
    echo '<p>Succesvol uitgelogd</p><meta http-equiv="refresh" content="2; url=/">';
  }

    
}

?>