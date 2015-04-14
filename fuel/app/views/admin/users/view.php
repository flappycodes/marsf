<p>
	<strong>Username:</strong>
	<?php echo $user->username; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $user->email; ?></p>
<br />
<?php echo Html::anchor('admin/users/edit/'.$user->id, 'Edit', array('class' => 'btn btn-warning')); ?> 
<?php echo Html::anchor('admin/users', 'Back', array('class' => 'btn btn-default')); ?>