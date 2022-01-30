<?php
include 'AdminPanel/db.php';
$GetService=$DbName->prepare("SELECT * FROM services  ");
$GetJob=$DbName->prepare("SELECT * FROM job");
$GetJob->execute();
$GetService->execute(); 
?>
<section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
        <?php foreach($GetService as $result):?>
          <div class="title-box text-center">
          
            <h3 class="title-a">
            <?=$result["ServicesHead"]?>
            </h3>

            <p class="subtitle-a">
            <?=$result["ServicesSubHead"]?>
            </p>
            <div class="line-mf"></div>
          </div>
          <?php endforeach;  ?>
        </div>
      </div>
      
      <div class="row">
      <?php foreach($GetJob as $result1):?>
        <div class="col-md-4">
        
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-monitor"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title"><?=$result1["JobHead"]?></h2>
              <p class="s-description text-center">
              <?=$result1["JobTitle"]?>
              </p>
            </div>
          </div>
         
        </div>
        <?php endforeach;  ?>
      </div>
      
      
    </div>
  </section>