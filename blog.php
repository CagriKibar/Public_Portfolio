<?php 
include 'AdminPanel/db.php';
$GetBlog=$DbName->prepare("SELECT * FROM blog  ");
$GetBlogDetail=$DbName->prepare("SELECT * FROM  blogcontentdetail");
$GetBlog->execute();

$GetBlogDetail->execute();
?>

<section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
      
        <div class="col-sm-12">
        <?php foreach($GetBlog as $result):?>
          <div class="title-box text-center">
            <h3 class="title-a">
            <?=$result["BlogHead"]?>
            </h3>
            <p class="subtitle-a">
            <?=$result["SubHead"]?>
            </p>
            <div class="line-mf"></div>
          </div>
          <?php endforeach;  ?>
        </div>
       
      
    
      <div class="col-md-4">
      <?php foreach($GetBlogDetail as $result1):?>
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.php"><img src="<?=$result1["BlogContentPhoto"]?>" alt="" class="img-fluid"></a>
            </div>
            
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category"><?=$result1["BlogContentCategory"]?></h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.php?.ID."><?=$result1["BlogContentHead"]?></a></h3>
              <p class="card-description">
              <?=$deger=substr($result1["BlogContent"],0,150)?>
              </p>
            </div>
          </div>
         
          <?php endforeach;  ?>
  
      
      </div>
      
    </div>
</section>

 