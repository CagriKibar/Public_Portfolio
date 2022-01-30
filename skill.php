<?php
include 'AdminPanel/db.php';
$GetSkill=$DbName->prepare("SELECT * FROM skill  ");
  $GetSkill->execute();
?>

<?php foreach($GetSkill as $result):?>
  <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    <span class="sr-only">70% Complete</span>
  </div>
</div>
 <?php endforeach;  ?>