<?php
session_start();
if (!isset($_SESSION['aid']) && !isset($_SESSION['role'])) {
    header("location:../login/index.php");
}
require_once("../hf/nav.php");
?>
<style>
    .btn-warning {
        display: block;
    }

    .delete {
        float: left;
    }
</style>


<link rel="stylesheet" href="css/style.css">
<div class="container">
    <div style="height:50px;"></div>
    <div class="well" style="margin-left:auto; margin-right:auto; padding:auto; width:70%;">
        <span style="font-size:25px; color:blue"><strong>DEPARTMENTS</strong></span>
        <span class="pull-right"><a id="add" style="cursor:pointer;" class="btn btn-primary"><span
                    class="glyphicon glyphicon-plus"></span> Add New</a></span>
        <div style="height:15px;"></div>
        <div id="table"></div>
        <div id="alert" class="alert alert-success" style="display:none;">
            <center><span id="alerttext"></span></center>
        </div>
    </div>
    
    <?php include('modal.php'); ?>
    <script src="test.js">  </script>
</div>
<?php
include("../hf/footer.php")
    ?>