<h2>Listing Reqentries</h2>
<br>
<?php if ($reqentries): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Tsrno</th>
			<th>Client</th>
			<th>Reqid</th>
			<th>Daterequested</th>
			<th>Daterequired</th>
			<th>Priority</th>
			<th>Error</th>
			<th>Iosfr</th>
			<th>Respdate</th>
			<th>Asw</th>
			<th>Deliverydate</th>
			<th>Assignedid</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($reqentries as $reqentry): ?>		<tr>

			<td><?php echo $reqentry->tsrno; ?></td>
			<td><?php echo $reqentry->client; ?></td>
			<td><?php echo $reqentry->reqid; ?></td>
			<td><?php echo $reqentry->daterequested; ?></td>
			<td><?php echo $reqentry->daterequired; ?></td>
			<td><?php echo $reqentry->priority; ?></td>
			<td><?php echo $reqentry->error; ?></td>
			<td><?php echo $reqentry->iosfr; ?></td>
			<td><?php echo $reqentry->respdate; ?></td>
			<td><?php echo $reqentry->asw; ?></td>
			<td><?php echo $reqentry->deliverydate; ?></td>
			<td><?php echo $reqentry->assignedid; ?></td>
			<td>
				<?php echo Html::anchor('admin/reqentry/view/'.$reqentry->id, 'View'); ?> |
				<?php echo Html::anchor('admin/reqentry/edit/'.$reqentry->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/reqentry/delete/'.$reqentry->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Reqentries.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/reqentry/create', 'Add new Reqentry', array('class' => 'btn btn-success')); ?>

</p>
