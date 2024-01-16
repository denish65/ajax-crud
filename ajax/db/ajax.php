<?php

$df='';
$conn=mysqli_connect("localhost","root","admin@123","test");

$srole="SELECT * FROM  Registration ";
$un='SELECT * FROM Department';
$rp="SELECT * FROM  Registration ";
$catselect="SELECT * FROM category";

$ed=$conn->query($rp);
$ft=$conn->query($un);
$rt=mysqli_fetch_array($ft);
$mk=$conn->query($srole);

$catsel=$conn->query($catselect);

?>
