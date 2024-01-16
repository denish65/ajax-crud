<?php
// include("../db/ajax.php");
$conn = mysqli_connect("localhost", "root", "admin@123", "test");
$catselect = "SELECT * FROM category";
$catsel = $conn->query($catselect);
?>
<div class="modal fade" id="img" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    <form id="imgForm" method="post" class="addfrm" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label" style="position:relative; top:7px;"> select category
                                </label>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control" name="catname" id="catname">
                                    <option value=""> select category </option>
                                    <?php
                                    while ($ra = mysqli_fetch_array($catsel)) {
                                        ?>
                                        <option value="<?php echo $ra['category']; ?>"><?php echo $ra['category']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label" style="position:relative; top:7px;">Department
                                    name:</label>
                            </div>
                            <div class="col-md-10">
                                <input type="file" class="form-control" name="image[]" id="image" multiple required>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" id="imgbutton" class="btn btn-primary"><span
                        class="glyphicon glyphicon-floppy-disk">Save</span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $().ready(function () {
        $("#imgForm").validate({
            rules: {
                catname: {
                    required: true,
                },
                image: {
                    required: true,
                },
            },
            messages: {
                catname: {
                    required: " Please select category name",
                },
                image: {
                    required: "please select  images ",
                },
            }
        });

        $("#imgbutton").on('click', function () {
            if ($("#imgForm").valid()) {
            }
        });
    });
</script>