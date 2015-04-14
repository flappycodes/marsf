<h2>Viewing #<?php echo $assignee->id; ?></h2>

<p>
	<strong>Firstname:</strong>
	<?php echo $assignee->firstname; ?></p>
<p>
	<strong>Middlename:</strong>
	<?php echo $assignee->middlename; ?></p>
<p>
	<strong>Lastname:</strong>
	<?php echo $assignee->lastname; ?></p>
<p>
	<strong>Status:</strong>
	<?php echo $assignee->status; ?></p>

<?php echo Html::anchor('admin/assignee/edit/'.$assignee->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/assignee', 'Back'); ?>