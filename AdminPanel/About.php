<?php require_once 'navbar.php';
include 'db.php';
$GetAbout=$DbName->prepare("SELECT * from about,writer WHERE writer.About_id=about.ID");
$GetSkill=$DbName->prepare("SELECT * FROM skill  ");
$GetSkill->execute();
$GetAbout->execute();

?>
 <div class="main-panel" style="height: 100vh;">
 
 <div class="content">
        <div class="row">
          <div class="col-md-12">
          
          <form method="POST">
  <div class="form-group">
    <label>Ana Başlığı Giriniz</label>
    <input type="text" class="form-control" name="AboutHead" placeholder="Başlık Giriniz">
  </div>
  <div class="form-group">
    <label>Alt  Başlığı Giriniz</label>
    <input type="text" class="form-control" name="AboutContent" placeholder="Alt Başlık Giriniz">
  </div>
  <div class="form-group">
    <label>Profil Bilgileri</label>
    <input type="text" class="form-control" name="Profile" placeholder="Alt Başlık Giriniz">
  </div>
  <button type="submit" name="ekle" class="btn btn-primary">Ekle</button>
  <a class="btn btn-primary" href="UpdateAbout.php" role="button">Güncelle</a>
  
  
</form>

          
         
           
            <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">About Head</th>
                <th scope="col">About Content</th>
                <th scope="col">Profile</th>
                <th scope="col">Skill Name</th>
                <th scope="col">EMail</th>
            <th scope="col">Name</th>
            
            <script type = "text/javascript" >
function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
</script>
            
    </tr>
  </thead>
  <tbody>
  <?php foreach($GetAbout as $result):?>
    <tr>
      <th scope="row"><?=$result["ID"]?></th>
      <td><?=$result["AboutHead"]?></td>
      <td><?=$result["AboutContent"]?></td>
      <td><?=$result["Profile1"]?></td>
      <?php foreach($GetSkill as $result1):?>
      <td><?=$result1["SkillName"]?></td>
      <?php endforeach;  ?>
      <td><?=$result["WriterName"]?></td>
      <td><?=$result["WriterMail"]?></td>
      <td><?=$result["WriterPassword"]?></td>
      <td><?=$result["WriterPhoto"]?></td>
      
    </tr>
    <?php endforeach;  ?>
  </tbody>
</table>

          
          </div>


            
        </div>
        </div>
 </div>

 <?if(isset($_POST['ekle'])) {
	$ekle=$DbName->prepare("INSERT INTO about SET
	AboutHead=:AboutHead,
  AboutContent=:AboutContent,
  Profile1=:Profile1
	");
	$control=$ekle->execute(array(
		'AboutHead'=>$_POST['AboutHead'],
    'AboutContent'=>$_POST['SubHead'],
    'Profile1'=>$_POST['Profile1']

		));
}
?>
?>


<?php require_once 'footer.php';?>