<h2>Listing Assignees</h2>
<br>
<?php if ($assignees): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Name</th>
			<th>Status</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($assignees as $assignee): ?>		<tr>

			<td><?php echo ucwords($assignee->lastname .", ". $assignee->firstname ." ".$assignee->middlename); ?></td>
			<td><?php if (0 == $assignee->status) {
				echo "Active Assignee";
			} else {
				echo "Deactivated Assginee";
				} ?></td>
			<td>
				<?php echo Html::anchor('admin/assignee/view/'.$assignee->id, 'View', array('class' => 'btn btn-primary', 'title' => 'View')); ?> 
				<?php echo Html::anchor('admin/assignee/edit/'.$assignee->id, 'Edit', array('class' => 'btn btn-warning', 'title' => 'Edit')); ?> 
				<?php if (0 == $assignee->status) {
					echo Html::anchor('admin/assignee/delete/'.$assignee->id, 'Deactivate', array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn btn-danger', 'title' => 'Deactivate'));
				} else {
					echo Html::anchor('admin/assignee/activate/'.$assignee->id, 'Activate', array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn btn-info', 'title' => 'Activate'));
					} ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Assignees.</p>

<?php endif; ?><p>
<br />
<br />
	<?php echo Html::anchor('admin/assignee/create', 'Add new Assignee', array('class' => 'btn btn-success')); ?>

</p>