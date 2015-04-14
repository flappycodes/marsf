<p>
	<strong>Department name:</strong>
	<?php echo ucwords($department->depname); ?></p>
<p>
	<strong>Status:</strong>
	<?php if (0 == $department->status) {
		echo "Active Department";
	} else {
		echo "Deactivated Department";
		} ?>
</p>
<br />
<?php echo Html::anchor('admin/department/edit/'.$department->id, 'Edit', array('class' => 'btn btn-warning')); ?> 
<?php echo Html::anchor('admin/department', 'Back', array('class' => 'btn btn-default')); ?>