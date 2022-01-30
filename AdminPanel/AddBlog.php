<?php 

require_once 'navbar.php';
include 'db.php';

?>

<div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          
            <h3 class="description">
            <form action="" method="POST">
  <div class="form-group">
    <label>Ana Başlığı Giriniz</label>
    <input type="text" class="form-control" name="BlogContentHead" placeholder="Başlık Giriniz">
  </div>
  <div class="form-group">
    <label>Fotoğraf Link Ekleyiniz</label>
    <input type="text" class="form-control" name="BlogContentPhoto" placeholder="Fotoğraf Linli Bırakınız">
  </div>
  <div class="form-group">
    <label>Blog İçeriğini Giriniz</label>
    <input type="text" class="form-control" name="BlogContent" placeholder="Blog İçeriğini Giriniz">
  </div>
  <div class="form-group">
    <label>Blog Kategori Başlığı Giriniz</label>
    <input type="text" class="form-control" name="BlogContentCategory" placeholder="Blog Kategoryi Başlığını Giriniz">
  </div>
  <button type="submit" name="ekle" class="btn btn-primary">Gönder</button>
  
  
</form>

            </h3>
            
            <div class="col-md-4">
            
            </div>
            
        </div>
            


        <script type = "text/javascript" >
function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
</script>


<?php if(isset($_POST["ekle"])) {
  $ekle=$DbName->prepare("insert into blogcontentdetail set 
  BlogContentHead=:BlogContentHead,
  BlogContentPhoto=:BlogContentPhoto,
  BlogContent=:BlogContent,
  BlogContentCategory=:BlogContentCategory
  
  ");
  $kontrol=$ekle->execute(array(
    "BlogContentHead"=>$_POST["BlogContentHead"],
    "BlogContentPhoto"=>$_POST["BlogContentPhoto"],
    "BlogContent"=>$_POST["BlogContent"],
    "BlogContentCategory"=>$_POST["BlogContentCategory"]
  
    ));


}

?>
<?php require_once 'footer.php';?>