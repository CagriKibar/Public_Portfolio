<?php  require_once 'navbar.php';
 include "db.php";
 $ID=$_GET["ID"];
$sorgu=$DbName->prepare("SELECT * FROM About,writer WHERE writer.About_id=about.ID ");
$sorgu->execute(array("ID"=>$ID));
$row=$sorgu->fetch(PDO::FETCH_ASSOC);
  ?>

<div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <script type = "text/javascript" >
function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
</script>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
         
            <h3 class="description">
<form method="POST">
  <div class="form-group">
    <label >Hakkında Başlığı Güncelle</label>
    <input type="text" class="form-control" name="AboutHead" value="<?php echo $row['AboutHead']; ?>"  placeholder="Başlık Giriniz">
  </div> <div class="form-group">
    <label >Hakkında İçeriği Güncelle</label>
    <input type="text" class="form-control" name="AboutContent" value="<?php echo $row['AboutContent']; ?>"  placeholder="İçerik Giriniz">
  </div>
  <div class="form-group">
    <label >Hakkında Profili Güncelle</label>
    <input type="text" class="form-control" name="Profile1" value="<?php echo $row['Profile1']; ?>"  placeholder="Profil Giriniz">
  </div>
  <div class="form-group">
    <label >Yazar Adı Güncelle</label>
    <input type="text" class="form-control" name="WriterName" value="<?php echo $row['WriterName']; ?>"  placeholder="Profil Giriniz">
  </div>
  <div class="form-group">
    <label >Yazar Mail Güncelle</label>
    <input type="text" class="form-control" name="WriterMail" value="<?php echo $row['WriterMail']; ?>"  placeholder="Profil Giriniz">
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


  

<?php
 if($_POST){
     $AboutHead=$_POST["AboutHead"];
     $WriterName=$_POST["WriterName"];
     $AboutContent=$_POST["AboutContent"];
     $WriterMail=$_POST["WriterMail"];
     
     $Profile1=$_POST["Profile1"];
     $updateAbout=$DbName->prepare("UPDATE about,writer SET  WriterName=:WriterName, WriterMail=:WriterMail AboutHead=:AboutHead, AboutContent=:AboutContent, Profile1=:Profile1, WHERE ID=:ID");
     $updateAbout->execute(array(":AboutHead"=>$AboutHead,":WriterName"=>$WriterName, ":WriterMail"=>$WriterMail, ":AboutContent"=>$AboutContent,":Profile1"=>$Profile1, ":ID"=>$ID));
     if($updateAbout){
         echo "işlem Başarılı";
         header("Refresh:2; url=AdminPanel/About.php");
     }else {
         echo "Hata";
     }
 }
?>

<?php require_once 'footer.php';?>