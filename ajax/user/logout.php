<?php 
session_start();
require_once('../hf/nav.php');
unset($_SESSION['uemail']);
unset($_SESSION['urole']);
unset($_SESSION['uid']);
header("location:../login/index.php");
?>