<h2>Listing Requestors</h2>
<br>
<?php if ($requestors): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Name</th>
			<th>Department</th>
			<th>Department position</th>
			<th>Contact number</th>
			<th>Status</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($requestors as $requestor): ?>		<tr>

			<td><?php echo ucwords($requestor['firstname'] .", ". $requestor['middlename'] ." ". $requestor['lastname']); ?></td>
			<td><?php echo $requestor['depname']; ?></td>
			<td><?php if (1 == $requestor['group']) {
				echo "Member";
			} else {
				echo "Department Head";
				} ?></td>
			<td><?php echo $requestor['contactno']; ?></td>
			<td><?php if (0 == $requestor['rs']) {
				echo "Active Requestor";
			} else {
				echo "Deactivated Requestor";
				} ?></td>
			<td>
				<?php echo Html::anchor('admin/requestor/view/'.$requestor['rid'], 'View', array('class' => 'btn btn-primary')); ?> 
				<?php echo Html::anchor('admin/requestor/edit/'.$requestor['rid'], 'Edit', array('class' => 'btn btn-warning')); ?> 
				<?php if (0 == $requestor['rs']) {
					echo Html::anchor('admin/requestor/delete/'.$requestor['rid'], 'Deactivate', array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn btn-danger'));
				} else {
					echo Html::anchor('admin/requestor/activate/'.$requestor['rid'], 'Activate', array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn btn-info'));
					} ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Requestors.</p>

<?php endif; ?><p>
<br />
<br />
	<?php echo Html::anchor('admin/requestor/create', 'Add new Requestor', array('class' => 'btn btn-success')); ?>

</p>