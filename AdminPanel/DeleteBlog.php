<?php 
include "db.php";
$delete=$DbName->prepare("delete from blogcontentdetail where ID=:ID");
$control=$delete->execute(array(
"ID"=>$_GET["ID"]));

if ($control) {
	header("Location:blog.php");
	exit;
}else{
	echo "hata";
}

?>