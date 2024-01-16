<?php 
session_start();
require_once("../hf/nav.php");
unset($_SESSION['email']);
unset($_SESSION['role']);
unset($_SESSION['aid']);
header("location:../login/index.php");
?>