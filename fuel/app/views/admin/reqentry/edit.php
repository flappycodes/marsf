<h2>Editing Reqentry</h2>
<br>

<?php echo render('admin\reqentry/_form'); ?>
<p>
	<?php echo Html::anchor('admin/reqentry/view/'.$reqentry->id, 'View'); ?> |
	<?php echo Html::anchor('admin/reqentry', 'Back'); ?></p>
