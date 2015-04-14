<h2>Viewing #<?php echo $requestor->id; ?></h2>

<p>
	<strong>Firstname:</strong>
	<?php echo $requestor->firstname; ?></p>
<p>
	<strong>Middlename:</strong>
	<?php echo $requestor->middlename; ?></p>
<p>
	<strong>Lastname:</strong>
	<?php echo $requestor->lastname; ?></p>
<p>
	<strong>Depid:</strong>
	<?php echo $requestor->depid; ?></p>
<p>
	<strong>Contactno:</strong>
	<?php echo $requestor->contactno; ?></p>
<p>
	<strong>Status:</strong>
	<?php echo $requestor->status; ?></p>
<p>
	<strong>Group:</strong>
	<?php echo $requestor->group; ?></p>

<?php echo Html::anchor('admin/requestor/edit/'.$requestor->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/requestor', 'Back'); ?>