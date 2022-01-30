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
    <input type="text" class="form-control" name="SkillName" placeholder="Skill Giriniz">
  </div>
  
  <button type="submit" name="AddSkill" class="btn btn-primary">Gönder</button>
  
  
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

<?php 
if(isset($_POST['AddSkill'])) {
	$ekle=$DbName->prepare("INSERT INTO skill SET
	
    SkillName=:SkillName
    
	");
	$control=$ekle->execute(array(
		
        'SkillName'=>$_POST['SkillName'],
        
        

		));
}

?>