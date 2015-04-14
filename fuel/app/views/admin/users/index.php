<h2>Listing Users</h2>
<br>
<?php if ($users): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Username</th>
			<th>Email</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $user): ?>		<tr>

			<td><?php echo $user->username; ?></td>
			<td><?php echo $user->email; ?></td>
			<td>
				<?php echo Html::anchor('admin/users/view/'.$user->id, 'View', array('class' => 'btn btn-info')); ?> 
				<?php echo Html::anchor('admin/users/edit/'.$user->id, 'Edit', array('class' => 'btn btn-warning')); ?> 
				<?php echo Html::anchor('admin/users/delete/'.$user->id, 'Delete', array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn btn-danger')); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?><p>
<br />
<br />
	<?php echo Html::anchor('admin/users/create', 'Add new User', array('class' => 'btn btn-success')); ?>

</p>
