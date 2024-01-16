<?php

include("../db/db.php");
if(isset($_POST['edname'])&&isset($_POST['edlocation'])&&isset($_POST['euname']))
{
    $dpup=new db();
    $edname=$_POST['edname'];
    $edlocation=$_POST['edlocation'];
    $euname=$_POST['euname'];
    $did=$_POST['memid'];
    $dpup->dpupdate($edname,$edlocation,$euname,$did);
}
?>

