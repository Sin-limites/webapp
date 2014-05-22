
<div id="header" class="spacing">
<?php
if(!empty($_SESSION['log'])){

  $id = $_SESSION['log'];
  $user = new userInfo($id);
?>
  <p id="whoami">Ingelogd als: <strong><?php echo $user->getUser() ?></strong> 

<span class="line-spacer"><span class="line-spacer">|</span></span>  <a href="/user/logout/">Uitloggen</a>
      </p>
<?php } ?>

</div>

<!-- container -->
<div class="container">

  <!-- header -->
  <div class="header">
    <!-- logo -->
    <div class="logo">
      <a href=""><img src="/res/images/logo.png"></a>
    </div><!-- /logo -->

    <!-- nav -->
    <div class="nav">
      <ul>
        <li><a href="/">home</a></li>
        <li><a href="#">data</a></li>
        <li><a href="/map/">map</a></li>
      </ul>
    </div><!-- /nav -->
  </div><!-- /header -->