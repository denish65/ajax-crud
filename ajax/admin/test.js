$(document).ready(function(){
	showTable();

	//add
	$('#add').click(function(){
		$('#addnew').modal('show');
		$('#addForm')[0].reset();
	});

	$('#addbutton').click(function(){
		var dname = $('#dname').val();
		var dlocation = $('#dlocation').val();
		var uname = $('#uname').val();
		var date = $('#date').val();

		if(dname!='' && dlocation!==''&& uname!=='' ){
			var addForm = $('#addForm').serialize();
			$.ajax({
				type: 'POST',
				url: 'insert.php',
				data: addForm,
				success:function(){
					$('#addnew').modal('hide');
					$('#addForm')[0].reset();
					showTable();
					$('#alert').slideDown();
					$('#alerttext').text('Department Added Successfully');
				}
			});
		}
		else{
			// alert('Please Enter All Fields')
		}
		
	});

	//edit
	$(document).on('click', '.edit', function(){
		var memid = $(this).data('id');
		var edname = $('#dname'+memid).text();
		var edlocation = $('#dlocation'+memid).text();
		var euname = $('#uname'+memid).text();

		$('#editmem').modal('show');
		$('#edname').val(edname);
		$('#edlocation').val(edlocation);
		$('#euname').val(euname);
		$('#editbutton').val(memid);
	});
	
	$('#editbutton').click(function(){
		var memid = $(this).val();
		var editForm = $('#editForm').serialize();
		$.ajax({
			type: 'POST',
			url: 'depart_edit.php',
			data: editForm + "&memid="+memid,
			success:function(){
				$('#editmem').modal('hide');
				$('#editForm')[0].reset();
				showTable();
				$('#alert').slideDown();
				$('#alerttext').text('Member Updated Successfully');
			}
		});
	});

	//delete
	$(document).on('click', '.delete', function(){
		var memid = $(this).data('id');
		// var first = $('#first'+memid).text();
		$('#delmem').modal('show');
		$('#msg').text("are you sure to delete this data");
		$('#delbutton').val(memid);
	});

	$('#delbutton').click(function(){
		var memid = $(this).val();
		$.ajax({
			type: 'POST',
			url: 'depart_delet.php',
			data: {
				memid: memid,
			},
			success:function(){
				$('#delmem').modal('hide');
				showTable();
				$('#alert').slideDown();
				$('#alerttext').text('Member Deleted Successfully');
			}
		});
	});

});

function showTable(){
	$.ajax({
		type: 'POST',
		url: 'depart_show.php',
		data: {
			fetch: 1
		},
		success:function(data){
			$('#table').html(data);
		}
	});
}