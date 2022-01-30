<?php  require_once 'navbar.php';
include 'AdminPanel/db.php';
$GetBlog=$DbName->prepare("SELECT * FROM blog  ");
$GetBlogDetail=$DbName->prepare("SELECT * FROM  blogcontentdetail");
$GetBlog->execute();

$GetBlogDetail->execute();
?>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div class="intro intro-single route bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Blog Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
          
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->
  <?php foreach($GetBlogDetail as $result1):?>
  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
       
          <div class="post-box">
            <div class="post-thumb">
              <img src="<?=$result1["BlogContentPhoto"]?>" class="img-fluid" alt="">
            </div>
            <div class="post-meta">
              <h1 class="article-title"><?=$result1["BlogContentHead"]?></h1>
             
            </div>
            <div class="article-content">
              <p>
              <?=$result1["BlogContent"]?>
              </p>
              
              <blockquote class="blockquote">
                <p class="mb-0"><?=$result1["BlogContentCategory"]?></p>
              </blockquote>
          
            </div>
          </div>
          
  </section>
  <?php endforeach;  ?>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
