<?php include  'db.php';
require_once 'navbar.php';
?>
<div class="main-panel" style="height: 100vh;">
<script type = "text/javascript" >
function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
</script>
 <div class="content">
        <div class="row">
          <div class="col-md-12">
          <form method="POST">
  <div class="form-group">
    <label>Ana Başlığı Giriniz</label>
    <input type="text" class="form-control" name="ServicesHead" placeholder="Başlık Giriniz">
  </div>
  <div class="form-group">
    <label>Alt  Başlığı Giriniz</label>
    <input type="text" class="form-control" name="ServicesSubHead" placeholder="Alt Başlık Giriniz">
  </div>
  <button type="submit" name="ServicesAdd" class="btn btn-primary">Ekle</button>
  <a class="btn btn-primary" href="UpdateAbout.php" role="button">Güncelle</a>
  
  
</form>

          </div>
        </div>


 </div>
</div>


 
<?php require_once 'footer.php';?>
 <?if(isset($_POST['ServicesAdd'])) {
	$ekle=$DbName->prepare("INSERT INTO services SET
	ServicesHead=:ServicesHead,
    ServicesSubHead=:ServicesSubHead,
    
	");
	$control=$ekle->execute(array(
		'AboutHead'=>$_POST['AboutHead'],
        'AboutContent'=>$_POST['SubHead'],
        'JobHead'=>$_POST['JobHead'],
        'JobTitle'=>$_POST['JobTitle'],
        

		));
}
?>