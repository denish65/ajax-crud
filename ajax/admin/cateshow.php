<?php
include('../db/db.php');
if (isset($_POST['fetch'])) {
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<th> id </th>
			<th>Category Nmae</th>
			<th>DEPARTMENTS</th>
		</thead>
		<tbody>
			<?php
			$s = new db();
			$dpsh = $s->cateshow();
			while ($row = mysqli_fetch_array($dpsh)) 
			{
				?>
				<tr>
					<td><span id="id<?php echo $row['id']; ?>"><?php echo $row['id']; ?></span></td>
					<td><span id="catname<?php echo $row['id']; ?>"><?php echo $row['category']; ?></span></td>
					<td><span id="dpname<?php echo $row['id']; ?>"><?php echo $row['department']; ?></span></td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
<?php
}
?>