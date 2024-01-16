<?php
	include('../db/db.php');
	if(isset($_POST['fetch'])){
		?>
		<table class="table table-striped table-bordered table-hover">
			<thead>
                <th> id </th>
				<th>Dpartment Name</th>
				<th>Department Location</th>
				<th> User Name</th>
				<th>careated date </th>
                <th> Edit </th>
                <th> Delett </th>
			</thead>
			<tbody>
			<?php
				$s=new db();
               $dpsh=$s->dpshow();
				while($row=mysqli_fetch_array($dpsh))
				{
					?>
					<tr>
						<td><span id="id<?php echo $row['id']; ?>"><?php echo $row['id']; ?></span></td>
						<td><span id="dname<?php echo $row['id']; ?>"><?php echo $row['depart_name']; ?></span></td>
						<td><span id="dlocation<?php echo $row['id']; ?>"><?php echo $row['depart_location']; ?></span></td>
						<td><span id="uname<?php echo $row['id']; ?>"><?php echo $row['user_name']; ?></span></td>
						<td><span id="uname<?php echo $row['id']; ?>"><?php echo $row['careated_date']; ?></span></td>
						<td>
                           <a style="cursor:pointer;" class="btn btn-success edit" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
						</td>
                        <td>
							<a style="cursor:pointer;" class="btn btn-danger delete" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </td>
					</tr>
					<?php
				}
			?>
			</tbody>
		</table>
		<?php
	}
?>

