<?php include 'db.php'; 
require_once 'navbar.php';
$GetJob=$DbName->prepare("SELECT * from job");
$GetService=$DbName->prepare("SELECT * from services");
$GetService->execute();
$GetJob->execute();
?>
<div class="main-panel" style="height: 100vh;">
 
 <div class="content">
        <div class="row">
          <div class="col-md-12">
          
          <div class="card">
          <div class="card-header">
         Servisler Ana Başlık
         Servisler Küçük Başlık
         Servisler Fotoğraf
         Servisler İsim
         </div>
         <?php foreach($GetService as $result):?>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <h5 class="card-title"><?=$result["ServicesHead"]?></h5>
          <p class="card-text"><?=$result["ServicesSubHead"]?></p>
         
         <a href="DeleteServices.php?ID=<?=$result["ID"];?>"class="btn btn-danger">Delete</a>
         <a href="DeleteJob.Php" class="btn btn-primary">Güncelle</a>
       </div>
       <a href="AddService.Php" class="btn btn-primary">Ekle</a>
       <?php endforeach;  ?>
      </div>
      
         

          
          </div>
          <?php foreach($GetJob as $result1):?>
          <div class="card">
          <div class="card-header">
         Job Head
         job Title
         </div>
          <div class="card-body">
            <h5 class="card-title"><?=$result1["JobHead"]?></h5>
          <p class="card-text"><?=$result1["JobTitle"]?></p>
          <a href="AddJob.Php" class="btn btn-primary">Ekle</a>
          <a href="DeleteJob.php?ID=<?=$result1["ID"];?>"class="btn btn-danger">Delete</a>
         <a href="DeleteJob.php?ID=<?=$result1["ID"];?>" class="btn btn-primary">Güncelle</a>
          
       </div>
      </div>
      <?php endforeach;  ?>
         


</div>
          
            
 </div>

 


 </div>
</div>



<?php require_once 'footer.php';?>