<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Department name', 'depname'); ?>

			<div class="input">
				<?php echo Form::input('depname', Input::post('depname', isset($department) ? $department->depname : ''), array('class' => 'span4', 'required')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?> 
			<?php echo Html::anchor('admin/department', 'Back', array('class' => 'btn btn-dafault')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>