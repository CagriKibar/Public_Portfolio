<?php
include 'navbar.php';
 
include "db.php";
 
if(isset($_POST['guncelle'])){
 
    $sql = "UPDATE `blogcontentdetail` 
        SET `BlogContentHead` = ?, 
            `BlogContentPhoto` = ?, 
            `BlogContent` = ?, 
            `BlogContentCategory` = ? WHERE `blogcontentdetail`.`ID` = ?";
    $dizi=[
        $_POST['BlogContentHead'],
        $_POST['BlogContentPhoto'],
        $_POST['BlogContent'],
        $_POST['BlogContentCategory'],
        $_POST['ID']
    ];
    $sorgu = $DbName->prepare($sql);
    $sorgu->execute($dizi);
 
    header("Location:index.php");
}
 
$sql ="SELECT * FROM blogcontentdetail WHERE ID = ?";
$sorgu = $DbName->prepare($sql);
$sorgu->execute([
$_GET['ID']
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
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
                <label>Ana Başlığı Giriniz</label>
                <input type="text" class="form-control" name="BlogContentHead" value="<?=$satir['BlogContentHead']?>" placeholder="Başlık Giriniz">
                </div>
                <div class="form-group">
                <label>fotograf</label>
                <input type="text" class="form-control" name="BlogContentPhoto" value="<?=$satir['BlogContentPhoto']?>" placeholder="Alt Başlık Giriniz">
            </div>
            <div class="form-group">
                <label>İçerik</label>
                <input type="text" class="form-control" name="BlogContent"  value="<?=$satir['BlogContent']?>" placeholder="Alt Başlık Giriniz">
            </div>
            <div class="form-group">
                <label>Kategoryi</label>
                <input type="text" class="form-control" name="BlogContentCategory"  value="<?=$satir['BlogContentCategory']?> "placeholder="Alt Başlık Giriniz">
            </div>
            <script type = "text/javascript" >
function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
</script>
          <button type="submit" name="update" class="btn btn-primary">Güncelle</button>
</form>

            </h3>
          </div>
        </div>

      </div>
</div>

<?php require_once 'footer.php';?>