<?php include  'db.php';
require_once 'navbar.php';
?>
<div class="main-panel" style="height: 100vh;">
 
 <div class="content">
        <div class="row">
          <div class="col-md-12">

          <form method="POST">

                <div class="form-group">
    <label>Profil Bilgileri</label>
    <input type="text" class="form-control" name="JobHead" placeholder="Proje Başlığı">
  </div>
  <div class="form-group">
    <label>Profil Bilgileri</label>
    <input type="text" class="form-control" name="JobTitle" placeholder="Proje Açıklaması">
  </div>
  <button type="submit" name="JobAdd" class="btn btn-primary">Ekle</button>
</form>
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

if(isset($_POST['JobAdd'])) {
	$ekle=$DbName->prepare("INSERT INTO job SET
	
    JobHead=:JobHead,
    JobTitle=:JobTitle
	");
	$control=$ekle->execute(array(
		
        'JobHead'=>$_POST['JobHead'],
        'JobTitle'=>$_POST['JobTitle'],
        

		));
}

?>
<?php require_once 'footer.php'; ?>