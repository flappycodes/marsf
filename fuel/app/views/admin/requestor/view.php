<p>
	<strong>Name:</strong>
	<?php echo ucwords($requestors[0]['lastname'] .", ". $requestors[0]['firstname'] ." ". $requestors[0]['middlename']); ?></p>
<p>
	<strong>Department:</strong>
	<?php echo ucwords($requestors[0]['depname']); ?></p>
<p>
	<strong>Department Position:</strong>
	<?php if (1 == $requestors[0]['group']) {
				echo "Member";
			} else {
				echo "Department Head";
				} ?></p>
<p>
	<strong>Contactno:</strong>
	<?php echo $requestors[0]['contactno']; ?></p>
<p>
	<strong>Status:</strong>
	<?php if (0 == $requestors[0]['status']) {
				echo "Active Requestor";
			} else {
				echo "Deactivated Requestor";
				}; ?></p>

<?php echo Html::anchor('admin/requestor/edit/'.$requestors[0]['rid'], 'Edit', array('class' => 'btn btn-warning')); ?> 
<?php echo Html::anchor('admin/requestor', 'Back', array('class' => 'btn btn-default')); ?>