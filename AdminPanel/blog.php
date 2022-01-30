



<?php require_once 'navbar.php';
include 'db.php';

$GetBlogDetail=$DbName->prepare("SELECT * FROM  blogcontentdetail");
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
            <div class="card-img">
              <a href="blog.php"><img src="<?=$result1["BlogContentPhoto"]?>" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category"><?=$result1["BlogContentCategory"]?></h6>
                </div>
              </div>
              <h7 class="card-title"><a href="blog.php"><?=$result1["BlogContentHead"]?></a></h7>
              <p class="card-description">
              <?=$deger=substr($result1["BlogContent"],0,10)?>
              </p>
            </div>
            <a href="DeleteBlog.php?ID=<?=$result1["ID"];?>"class="btn btn-danger">Delete</a>
            <a href="UpdateBlog.php?ID=<?=$result1['ID']?>" class="btn btn-warning">Güncelle</a>
            <a href="AddBlog.php" class="btn btn-success">Add</a>
          </div>
            </div>
            
          <?php endforeach;  ?>



  </h3>
          </div>
        </div>
      </div>
      <?php require_once 'footer.php';?>