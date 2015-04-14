<h2>Listing Requestors</h2>
<br>
<?php if ($requestors): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Firstname</th>
			<th>Middlename</th>
			<th>Lastname</th>
			<th>Depid</th>
			<th>Contactno</th>
			<th>Status</th>
			<th>Group</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($requestors as $requestor): ?>		<tr>

			<td><?php echo $requestor->firstname; ?></td>
			<td><?php echo $requestor->middlename; ?></td>
			<td><?php echo $requestor->lastname; ?></td>
			<td><?php echo $requestor->depid; ?></td>
			<td><?php echo $requestor->contactno; ?></td>
			<td><?php echo $requestor->status; ?></td>
			<td><?php echo $requestor->group; ?></td>
			<td>
				<?php echo Html::anchor('admin/requestor/view/'.$requestor->id, 'View'); ?> |
				<?php echo Html::anchor('admin/requestor/edit/'.$requestor->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/requestor/delete/'.$requestor->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Requestors.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/requestor/create', 'Add new Requestor', array('class' => 'btn btn-success')); ?>

</p>
