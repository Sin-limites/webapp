
<div id="topheader" class="spacing">
<?php
if(!empty($_SESSION['log'])){

  $id = $_SESSION['log'];
  $user = new userInfo($id);
?>
<div id="whoami" >
  <p >Ingelogd als: <strong><?php echo $user->getUser() ?></strong>
    <span class="line-spacer"><span class="line-spacer">|</span></span>  <a href="/user/logout/">Uitloggen</a>
  </p>
</div>
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
        <li><a href="/goods/datalist/">data</a></li>
        <li><a href="/goods/stowagedetail/?detailNum=091224">stow detail</a></li>
        <li><a href="/goods/map/">map</a></li>
      </ul>
    </div><!-- /nav -->
  </div><!-- /header -->