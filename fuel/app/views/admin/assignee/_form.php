<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Firstname', 'firstname'); ?>

			<div class="input">
				<?php echo Form::input('firstname', Input::post('firstname', isset($assignee) ? $assignee->firstname : ''), array('class' => 'span4', 'required')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Middlename', 'middlename'); ?>

			<div class="input">
				<?php echo Form::input('middlename', Input::post('middlename', isset($assignee) ? $assignee->middlename : ''), array('class' => 'span4', 'required')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Lastname', 'lastname'); ?>

			<div class="input">
				<?php echo Form::input('lastname', Input::post('lastname', isset($assignee) ? $assignee->lastname : ''), array('class' => 'span4', 'required')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?> 
			<?php echo Html::anchor('admin/assignee', 'Back', array('class' => 'btn btn-default')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>