<?php  require_once 'navbar.php'; 
include 'AdminPanel/db.php';
$sorgu=$DbName->prepare("SELECT * FROM home ");
$sorgu->execute();


?>

<body id="page-top">

  <!--/ Nav Star /-->
  
 
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/arkaplan.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
        <?php foreach($sorgu as $result):?>
          
          <h1 class="intro-title mb-4"><?=$result["Head"]?></h1>
          <p class="intro-subtitle"><span class="text-slider-items"><?=$result["SubHead"]?></span><strong class="text-slider"></strong></p>
          
          <?php endforeach;  ?>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->
<?php  require_once  'about.php'; ?>
  

  <!--/ Section Services Star /-->
  <?php require_once 'service.php'?>
  <!--/ Section Services End /-->



  <!--/ Section Portfolio Star /-->
  
  <!--/ Section Portfolio End /-->

  

  <!--/ Section Blog Star /-->
  
  <!--/ Section Blog End /-->
<?php require_once 'blog.php';?>
  <!--/ Section Contact-Footer Star /-->
 
  <?php require_once 'ContactAndFooter.php';?>               