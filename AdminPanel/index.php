<?php require_once 'navbar.php';
include 'db.php';
$sorgu=$DbName->prepare("SELECT * FROM home ");
$sorgu->execute();

?>
<script type = "text/javascript" >
function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
</script>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <a class="btn btn-primary" href="UpdateHome.php" role="button">Güncelle</a>
            <h3 class="description">

            
<form method="POST">
  <div class="form-group">
    <label>Ana Başlığı Giriniz</label>
    <input type="text" class="form-control" name="Head" placeholder="Başlık Giriniz">
  </div>
  <div class="form-group">
    <label>Alt  Başlığı Giriniz</label>
    <input type="text" class="form-control" name="SubHead" placeholder="Alt Başlık Giriniz">
  </div>
  <button type="submit" name="ekle" class="btn btn-primary">Gönder</button>
  
  
</form>




 
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Ana Sayfa Başlığı</th>
      <th scope="col">Küçük Başlık</th>
      
    </tr>
  </thead>
  <?php foreach($sorgu as $result):?>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?=$result["Head"]?></td>
      <td><?=$result["SubHead"]?></td> 
      <td><a href="UpdateHome.php?ID=<?=$result["ID"]?>">Düzenle</a></td>
    
    </tr>
  </tbody>
  <?php endforeach;  ?>
</table>

<?php 
if(isset($_POST['ekle'])) {
	$ekle=$DbName->prepare("INSERT INTO home SET
	Head=:Head,
  SubHead=:SubHead
	");
	$control=$ekle->execute(array(
		'Head'=>$_POST['Head'],
    'SubHead'=>$_POST['SubHead']
		));
}
?>

            </h3>
          </div>
        </div>
      </div>
     <?php require_once 'footer.php';?>