<?php
include("../db/db.php");
if(isset($_POST['catname'])&&isset($_POST['catname']))
{
    $cat=$_POST['catname'];
    $dep=$_POST['dep'];
     $insert=new db();
     $insert->cateinsert($cat,$dep);
}
?>