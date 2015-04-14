<h2>Viewing #<?php echo $department->id; ?></h2>

<p>
	<strong>Depname:</strong>
	<?php echo $department->depname; ?></p>
<p>
	<strong>Status:</strong>
	<?php echo $department->status; ?></p>

<?php echo Html::anchor('admin/department/edit/'.$department->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/department', 'Back'); ?>