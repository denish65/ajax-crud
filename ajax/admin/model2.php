<?php
// include("../db/ajax.php");
include("../db/cate.php");
?>
<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Add New Member</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="addForm">
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label" style="position:relative; top:7px;">Category Name:</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="catname" id="catname" required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label" style="position:relative; top:7px;">Department :</label>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control" name="dep" id="dep" required >
                                    <option value="" disabled> select department</option>
                                    <?php
                                    $show = new cate();
                                    $dep = $show->showdeprt();
                                    while ($r1 = mysqli_fetch_array($dep)) {
                                        ?>
                                        <option value="<?php echo $r1['depart_name']; ?>"><?php echo $r1['depart_name']; ?>
                                        </option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                    class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <button type="submit" id="addbutton" class="btn btn-primary"><span
                                    class="glyphicon glyphicon-floppy-disk">Save</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $().ready(function () {
            $("#addForm").validate({
                rules: {
                    catname: {
                        required: true,
                    },
                    dep: {
                        required: true,
                    },
                },
                messages: {
                    catname: {
                        required: " Please enter category name",
                    },
                    dep: {
                        required: "please select  department ",
                    },
                }
            });
            $("#addbutton").on('submit', function () {
                if ($("#addForm").valid()) {
                }
            });
        });
    </script>