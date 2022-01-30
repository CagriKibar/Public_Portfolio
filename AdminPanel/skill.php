<?php require_once 'navbar.php';
include 'db.php';

$GetBlogDetail=$DbName->prepare("SELECT * FROM  skill");
$GetBlogDetail->execute();


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
            
            <div class="col-md-4">
      <?php foreach($GetBlogDetail as $result1):?>
          <div class="card card-blog">
           
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category"><?=$result1["SkillName"]?></h6>
                </div>
              </div>
              
             
            </div>
            <a href="DeleteSkill.php?ID=<?=$result1["ID"];?>"class="btn btn-danger">Delete</a>
            <a href="UpdateBlog.php?ID=<?=$result1['ID']?>" class="btn btn-warning">Güncelle</a>
            <a href="AddSkill.php" class="btn btn-success">Add</a>
          </div>
            </div>
            
          <?php endforeach;  ?>



  </h3>
          </div>
        </div>
      </div>
     <?php require_once 'footer.php';?>