<?php  include 'AdminPanel/db.php';

?>

<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Mesaj Gönder
                    </h5>
                  </div>
                  <div>
                      <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="CustomerName" class="form-control"  placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="CustomerMail" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="CustomerSubject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="CustomerMessage" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" name="SendMessage" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      İletişim Adreslerim
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Proje İşlemleri İçin Mesaj Bırakabilirsin
                    </p>
                    <ul class="list-ico">
                      
                      <li><span class="ion-ios-telephone"></span> 05052195618</li>
                      
                      <li><span class="ion-email"><a href="mailto:muhackgames@gmail.com">cagri.kibar@outlook.com</a></span> </li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                     
                    <li><a href="https://twitter.com/cagrikibar"><span class="iconify" data-icon="logos:twitter"></span></span></a></li>
                      <li><a href="https://github.com/CagriKibar"><span class="iconify" data-icon="icon-park:github"></span></a></li>
                      <li><a href="https://www.linkedin.com/in/%C3%A7a%C4%9Fr%C4%B1-kibar-27a407188/"><span class="iconify" data-icon="brandico:linkedin-rect"></span></span></a></li>
                      
                      
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>CAGRI KIBAR</strong>. All Rights Reserved</p>
              <div class="credits">
                
               Collocate by <a href="#">CAGRI KIBAR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <?php if(isset($_POST["SendMessage"])) {
  $ekle=$DbName->prepare("insert into contact set 
  CustomerName=:CustomerName,
  CustomerMail=:CustomerMail,
  CustomerSubject=:CustomerSubject,
  CustomerMessage=:CustomerMessage
  
  ");
  $kontrol=$ekle->execute(array(
    "CustomerName"=>$_POST["CustomerName"],
    "CustomerMail"=>$_POST["CustomerMail"],
    "CustomerSubject"=>$_POST["CustomerSubject"],
    "CustomerMessage"=>$_POST["CustomerMessage"]
  
    ));


}

?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
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
