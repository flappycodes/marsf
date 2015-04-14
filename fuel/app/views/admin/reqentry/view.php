<h2>Viewing #<?php echo $reqentry->id; ?></h2>

<p>
	<strong>Tsrno:</strong>
	<?php echo $reqentry->tsrno; ?></p>
<p>
	<strong>Client:</strong>
	<?php echo $reqentry->client; ?></p>
<p>
	<strong>Reqid:</strong>
	<?php echo $reqentry->reqid; ?></p>
<p>
	<strong>Daterequested:</strong>
	<?php echo $reqentry->daterequested; ?></p>
<p>
	<strong>Daterequired:</strong>
	<?php echo $reqentry->daterequired; ?></p>
<p>
	<strong>Priority:</strong>
	<?php echo $reqentry->priority; ?></p>
<p>
	<strong>Error:</strong>
	<?php echo $reqentry->error; ?></p>
<p>
	<strong>Iosfr:</strong>
	<?php echo $reqentry->iosfr; ?></p>
<p>
	<strong>Respdate:</strong>
	<?php echo $reqentry->respdate; ?></p>
<p>
	<strong>Asw:</strong>
	<?php echo $reqentry->asw; ?></p>
<p>
	<strong>Deliverydate:</strong>
	<?php echo $reqentry->deliverydate; ?></p>
<p>
	<strong>Assignedid:</strong>
	<?php echo $reqentry->assignedid; ?></p>

<?php echo Html::anchor('admin/reqentry/edit/'.$reqentry->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/reqentry', 'Back'); ?>