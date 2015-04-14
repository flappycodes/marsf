<h2>Editing Assignee</h2>
<br>

<?php echo render('admin\assignee/_form'); ?>
<p>
	<?php echo Html::anchor('admin/assignee/view/'.$assignee->id, 'View'); ?> |
	<?php echo Html::anchor('admin/assignee', 'Back'); ?></p>
