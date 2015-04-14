<h2>Listing Assignees</h2>
<br>
<?php if ($assignees): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Firstname</th>
			<th>Middlename</th>
			<th>Lastname</th>
			<th>Status</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($assignees as $assignee): ?>		<tr>

			<td><?php echo $assignee->firstname; ?></td>
			<td><?php echo $assignee->middlename; ?></td>
			<td><?php echo $assignee->lastname; ?></td>
			<td><?php echo $assignee->status; ?></td>
			<td>
				<?php echo Html::anchor('admin/assignee/view/'.$assignee->id, 'View'); ?> |
				<?php echo Html::anchor('admin/assignee/edit/'.$assignee->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/assignee/delete/'.$assignee->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Assignees.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/assignee/create', 'Add new Assignee', array('class' => 'btn btn-success')); ?>

</p>
