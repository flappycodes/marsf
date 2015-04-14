<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Firstname', 'firstname'); ?>

			<div class="input">
				<?php echo Form::input('firstname', Input::post('firstname', isset($requestor) ? $requestor->firstname : ''), array('class' => 'span4', 'required')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Middlename', 'middlename'); ?>

			<div class="input">
				<?php echo Form::input('middlename', Input::post('middlename', isset($requestor) ? $requestor->middlename : ''), array('class' => 'span4', 'required')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Lastname', 'lastname'); ?>

			<div class="input">
				<?php echo Form::input('lastname', Input::post('lastname', isset($requestor) ? $requestor->lastname : ''), array('class' => 'span4', 'required')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Department', 'depid'); ?>

			<div class="input">
				<?php echo Form::select('depid', Input::post('depid', isset($requestor) ? $requestor->depid : ''), $department, array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Department position', 'group'); ?>

			<div class="input">
				<?php echo Form::select('group', Input::post('group', isset($requestor) ? $requestor->group : ''), array(1 => 'Member', 100 => 'Department Head'), array('class' => 'span4')); ?>

			</div>
		</div>
			<div class="clearfix">
			<?php echo Form::label('Contact number', 'contactno'); ?>

			<div class="input">
				<?php echo Form::input('contactno', Input::post('contactno', isset($requestor) ? $requestor->contactno : ''), array('class' => 'span4', 'required')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>