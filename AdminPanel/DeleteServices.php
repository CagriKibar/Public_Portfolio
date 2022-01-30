<?php 
include "db.php";
$delete=$DbName->prepare("delete from services where ID=:ID");
$control=$delete->execute(array(
"ID"=>$_GET["ID"]));

if ($control) {
	header("Location:job.php");
	exit;
}else{
	echo "hata";
}

?>