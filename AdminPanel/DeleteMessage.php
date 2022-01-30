<?php 
include "db.php";
$delete=$DbName->prepare("delete from Contact where ID=:ID");
$control=$delete->execute(array(
"ID"=>$_GET["ID"]));

if ($control) {
	header("Location:Messages.php");
	exit;
}else{
	echo "hata";
}

?>