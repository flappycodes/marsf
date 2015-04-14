<h2>Editing Requestor</h2>
<br>

<?php echo render('admin\requestor/_form'); ?>
<p>
	<?php echo Html::anchor('admin/requestor/view/'.$requestor->id, 'View'); ?> |
	<?php echo Html::anchor('admin/requestor', 'Back'); ?></p>
