<?php  require_once 'navbar.php';
 include "db.php";
 $ID=$_GET["ID"];
$sorgu=$DbName->prepare("SELECT * FROM home WHERE ID=:ID");
$sorgu->execute(array("ID"=>$ID));
$row=$sorgu->fetch(PDO::FETCH_ASSOC);
  ?>

<div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
         
            <h3 class="description">
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Kategori Başlığı Güncelle</label>
    <input type="text" class="form-control" name="Head" value="<?php echo $row['Head']; ?>"  placeholder="Başlık Giriniz">
  </div> <div class="form-group">
    <label for="exampleInputEmail1">Kategori Başlığı Güncelle</label>
    <input type="text" class="form-control" name="SubHead" value="<?php echo $row['SubHead']; ?>"  placeholder="Başlık Giriniz">
  </div>
  

  <button type="submit" name="update" class="btn btn-primary">Güncelle</button>
  </form>
</div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
      </div>
        </div>
</div> 

<script type = "text/javascript" >
function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
</script>
  

<?php
 if($_POST){
     $Head=$_POST["Head"];
     $SubHead=$_POST["SubHead"];
     $updateHome=$DbName->prepare("UPDATE home SET Head=:Head, SubHead=:SubHead WHERE ID=:ID");
     $updateHome->execute(array(":Head"=>$Head, ":SubHead"=>$SubHead, ":ID"=>$ID));
     if($updateHome){
         echo "işlem Başarılı";
         header("Refresh:2; url=AdminPanel/index.php");
     }else {
         echo "Hata";
     }
 }
?>

<?php require_once 'footer.php';?>