<?php
require_once("../db/db.php");
$insertdata=new db();
if(isset($_POST['dname']) && isset($_POST['dlocation']) && isset($_POST['uname']))
{
   $dname=$_POST['dname'];
   $dlocation=$_POST['dlocation'];
   $uname=$_POST['uname'];
   $insertdata->insertdata($dname,$dlocation,$uname);
}

?>