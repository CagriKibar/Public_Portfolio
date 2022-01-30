<?php 
include 'AdminPanel/db.php';
$GetAbout=$DbName->prepare("SELECT * from about,writer WHERE   writer.About_id=about.ID");
$GetSkill=$DbName->prepare("SELECT * FROM skill  ");
$GetSkill->execute();

$GetAbout->execute();

?>

<section id="about" class="about-mf sect-pt4 route">
<?php foreach($GetAbout as $result):?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="img/me1.jpg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span><?=$result["WriterName"]?></span></p>
                      <p><span class="title-s">Profile: </span> <span><?=$result["Profile1"]?></span></p>
                      <p><span class="title-s">Email: </span> <span><?=$result["WriterMail"]?></span></p>
                      
                    </div>
                  </div>
                </div>
                <?php foreach($GetSkill as $result1):?>
  <div class="skill-mf">  
<p class="title-s">Skill</p>
<span><?=$result1["SkillName"]?></span> <span class="pull-right">85%</span>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
    aria-valuemax="100"></div>
</div>
 </div>
 <?php endforeach;  ?>
                
             
                
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                    <?=$result["AboutHead"]?>
                    </h5>
                  </div>
                  <p class="lead">
                  <?=$result["AboutContent"]?>
                  
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach;  ?>
  </section>
