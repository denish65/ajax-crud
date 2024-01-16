$(document).ready(function(){
	showTable();
	//add
	$('#add').click(function(){
		$('#addnew').modal('show');
		$('#addForm')[0].reset();
	});

	$('#addbutton').click(function(){
		var catneme = $('#catneme').val();
		var dep = $('#dep').val();
		
		if(catneme!='' && dep!==''){
			var addForm = $('#addForm').serialize();
			$.ajax({
				type: 'POST',
				url: 'cateinsert.php',
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

    $('#m').on('click',function(){
		$('#img').modal('show');
		$('#imgForm')[0].reset();
	});

	
});

function showTable(){
	$.ajax({
		type: 'POST',
		url: 'cateshow.php',
		data: {
			fetch: 1
		},
		success:function(data){
			$('#tablec').html(data);
		}
	});
}



