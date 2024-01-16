<?php
$conn = new mysqli('localhost','root','admin@123','test');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
?>
