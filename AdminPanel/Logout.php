<?php
session_start();
session_destroy();
session_unset();
unset($_SESSION['session']);
header("Location: ../LoginPanel/index.php");
?>