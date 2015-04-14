<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Tsrno', 'tsrno'); ?>

			<div class="input">
				<?php echo Form::input('tsrno', Input::post('tsrno', isset($reqentry) ? $reqentry->tsrno : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Client', 'client'); ?>

			<div class="input">
				<?php echo Form::input('client', Input::post('client', isset($reqentry) ? $reqentry->client : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Reqid', 'reqid'); ?>

			<div class="input">
				<?php echo Form::input('reqid', Input::post('reqid', isset($reqentry) ? $reqentry->reqid : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Daterequested', 'daterequested'); ?>

			<div class="input">
				<?php echo Form::input('daterequested', Input::post('daterequested', isset($reqentry) ? $reqentry->daterequested : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Daterequired', 'daterequired'); ?>

			<div class="input">
				<?php echo Form::input('daterequired', Input::post('daterequired', isset($reqentry) ? $reqentry->daterequired : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Priority', 'priority'); ?>

			<div class="input">
				<?php echo Form::input('priority', Input::post('priority', isset($reqentry) ? $reqentry->priority : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Error', 'error'); ?>

			<div class="input">
				<?php echo Form::input('error', Input::post('error', isset($reqentry) ? $reqentry->error : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Iosfr', 'iosfr'); ?>

			<div class="input">
				<?php echo Form::textarea('iosfr', Input::post('iosfr', isset($reqentry) ? $reqentry->iosfr : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Respdate', 'respdate'); ?>

			<div class="input">
				<?php echo Form::input('respdate', Input::post('respdate', isset($reqentry) ? $reqentry->respdate : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Asw', 'asw'); ?>

			<div class="input">
				<?php echo Form::textarea('asw', Input::post('asw', isset($reqentry) ? $reqentry->asw : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Deliverydate', 'deliverydate'); ?>

			<div class="input">
				<?php echo Form::input('deliverydate', Input::post('deliverydate', isset($reqentry) ? $reqentry->deliverydate : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Assignedid', 'assignedid'); ?>

			<div class="input">
				<?php echo Form::input('assignedid', Input::post('assignedid', isset($reqentry) ? $reqentry->assignedid : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>