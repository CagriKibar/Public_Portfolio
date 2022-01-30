<?php 
include "db.php";
$delete=$DbName->prepare("delete from skill where ID=:ID");
$control=$delete->execute(array(
"ID"=>$_GET["ID"]));

if ($control) {
	header("Location:skill.php");
	exit;
}else{
	echo "hata";
}

?>