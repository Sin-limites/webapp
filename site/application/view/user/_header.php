<?php

echo '    <div id="base" class="layout-default">';
echo '      <div id="header" class="spacing">';

if(!empty($_SESSION['log'])){

  $id = $_SESSION['log'];
  $user = new userInfo($id);

  echo '        <p id="whoami">Ingelogd als: <strong><a title="Je gegevens aanpassen" href="/user/edit">'.$user->getUser().'</a></strong> '; 

  echo '<span class="line-spacer"><span class="line-spacer">|</span></span>  <a href="/user/logout/">Uitloggen</a>
      </p>';
}

echo '      </div>';

?>
