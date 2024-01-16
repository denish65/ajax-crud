<?php
include("../db/ajax.php");
?>
<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Member</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form id="addForm" class="addfrm" >
					
                <div class="row"> 
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">Department name:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="dname" id="dname">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">Department location:</label>
						</div>
						<div class="col-md-10">
							<select class="form-control" name="dlocation" id="dlocation">
								<option value=""  > select location</option>
								<option value="surat">Surat</option>
								<option value="rajkot">Rajkot</option>
								<option value="vadodara">Vadodara</option>
								<option value="bhavnagar">Bhavnagar</option>
								<option value="jamnagar">Jamnagar</option>
								<option value="junagadh">Junagadh</option>
							</select>
						</div>
					</div>
                    <div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">Username:</label>
						</div>
						<div class="col-md-10">
						<select name="uname" class="form-control" id="uname">
							<option value="">select username</option>
							<?php
							while($row1=mysqli_fetch_array($mk)){?>
							<option value="<?php echo $row1['fristname']; ?>"> <?php echo $row1['fristname']; ?> </option>
							<?php
							}
							?>
						</select>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
               <button type="button"  id="addbutton"  class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk">Save</span></button> 
			</form>
                </div>
            </div>
        </div>
    </div>

<!-- Edit -->
<div class="modal fade" id="editmem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form id="editForm" >
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">Department name :</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="edname" id="edname" required> 
							<p id="demo" style="color: red;" ></p>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">Department location :</label>
						</div>
						<div class="col-md-10">
							<select class="form-control" name="edlocation" id="edlocation">
								<option value="" disabled > department location</option>
								<option value="surat">Surat</option>
								<option value="rajkot">Rajkot</option>
								<option value="vadodara">Vadodara</option>
								<option value="bhavnagar">Bhavnagar</option>
								<option value="jamnagar">Jamnagar</option>
								<option value="junagadh">Junagadh</option>
							</select>
						</div>
					</div>
					<div style="height:10px;"></div>
                    <div class="row">
						<div class="col-md-2">
							<label class="control-label"  style="position:relative; top:7px;">user name:</label>
						</div>
						<div class="col-md-10">
						<select class="form-control" name="euname" id="euname">
						<?php
							while($row1=mysqli_fetch_array($ed)){?>
							<option value="<?php echo $row1['fristname']; ?>"> <?php echo $row1['fristname']; ?> </option>
							<?php
							}
							?>
						</select>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
					<button type="button" id="editbutton" onclick="myFunction()" class="btn btn-info"><span class="glyphicon glyphicon-check"></span> Update</a>
				</form>
                </div>
            </div>
        </div>
    </div>

   
<!-- Delete -->
    <div class="modal fade" id="delmem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Department</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h5><center> <strong><span id="msg"></span></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
				<button type="submit" id="delbutton" class="btn btn-info"><span class="glyphicon "></span> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon "></span> NO</button>
                </div>
				
            </div>
        </div>
    </div>


	<script>
        $().ready(function () {

            $(".addfrm").validate({
                // in 'rules' user have to specify all the constraints for respective fields
                rules: {
                    dname:{
                           required:true,
                          },
					dlocation:{
                             required:true,
                             },
                    uname: {
                            required: true, 
                         },
                },
                // in 'messages' user have to specify message as per rules
                messages: {
                    dname: {
                      required:" Please enter your deparment name",
                    },
                    dlocation:{
                         required:"please select  department loaction",
                    },
                    uname: {
                        required: " Please select username",
                    },
                }
            });

			$("#addbutton").on('click', function () {
           //This will check validation of form depending on rules
           if($(".addfrm").valid())
           {
            //Do something here
           }
		});

        });


// 		$().ready(function () {

// $("#editForm").validate({
// 	// in 'rules' user have to specify all the constraints for respective fields
// 	rules: {
// 		edname:{
// 			   required:true,

// 		},
// 		edlocation:{
// 				 required:true,
// 				},
// 		euname: {
// 			required: true,
			
// 		},
// 	},
// 	// in 'messages' user have to specify message as per rules
// 	messages: {
// 		edname: {
// 		  required:" Please enter your deparment name",
// 		},
// 		edlocation:{
// 			 required:"please select  department loaction",
// 		},
// 		euname: {
// 			required: " Please select username",
		  
// 		},
// 	}
// });

// $("#editbutton").on('click', function () {
// //This will check validation of form depending on rules
// if($("#editForm").valid())
// {
// //Do something here
// }
// });

// });

</script>