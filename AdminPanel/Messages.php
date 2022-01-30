<?php require_once 'navbar.php';
include 'db.php';
$GetMessage=$DbName->prepare("SELECT * from Contact");
$GetMessage->execute();


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
          <?php foreach($GetMessage as $result1):?>
            <div class="card" style="width: 18rem;">
  <img src="https://cdn-icons-png.flaticon.com/512/948/948695.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mesajlar</h5>
    <h6 class="card-title"><?=$result1["CustomerName"]?></h6>
    <p class="card-text"><?=$result1["CustomerSubject"]?></p>
    <p class="card-text"><?=$result1["CustomerMessage"]?></p>
    <p class="card-text"><?=$result1["CustomerMail"]?></p>
    <a href="DeleteMessage.php?ID=<?=$result1["ID"];?>"class="btn btn-danger">Delete</a>
  </div>
</div>
<?php endforeach;  ?>
          
</div>
          </div>
        </div>
 </div>
 