<?php
include("../db/db.php");
if(isset($_POST['memid']))
{
    $did=$_POST['memid'];
    $delete=new db();
    $delete->dpdelete($did);
}
?>