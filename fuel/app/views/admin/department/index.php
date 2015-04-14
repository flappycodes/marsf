<h2>Listing Departments</h2>
<br>
<?php if ($departments): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Depname</th>
			<th>Status</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($departments as $department): ?>		<tr>

			<td><?php echo $department->depname; ?></td>
			<td><?php echo $department->status; ?></td>
			<td>
				<?php echo Html::anchor('admin/department/view/'.$department->id, 'View'); ?> |
				<?php echo Html::anchor('admin/department/edit/'.$department->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/department/delete/'.$department->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Departments.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/department/create', 'Add new Department', array('class' => 'btn btn-success')); ?>

</p>
