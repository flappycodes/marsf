<h2>List of Departments</h2>
<br>
<?php if ($departments): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Depname</th>
			<th>Status</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($departments as $department): ?>		<tr>

			<td><?php echo ucwords($department->depname); ?></td>
			<td><?php if (0 == $department->status) {
				echo "Active Department";
			} else {
				echo "Deactivated Department";
				} ?>
			</td>
			<td>
				<?php echo Html::anchor('admin/department/view/'.$department->id, 'View', array('class' => 'btn btn-primary', 'title' => 'View')); ?> 
				<?php echo Html::anchor('admin/department/edit/'.$department->id, 'Edit', array('class' => 'btn btn-warning', 'title' => 'Edit')); ?> 
				<?php if (0 == $department->status) {
					echo Html::anchor('admin/department/delete/'.$department->id, 'Deactivate', array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn btn-danger', 'title' => 'Deactivate'));
				} 
				else 
				{
					echo Html::anchor('admin/department/activate/'.$department->id, 'Deactivate', array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn btn-info', 'title' => 'Activate'));
				} ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Departments.</p>

<?php endif; ?><p>
<br />
<br />
	<?php echo Html::anchor('admin/department/create', 'Add new Department', array('class' => 'btn btn-success')); ?>

</p>
