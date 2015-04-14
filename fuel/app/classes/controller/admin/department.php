<?php
class Controller_Admin_Department extends Controller_Admin 
{

	public function action_index()
	{
		$data['departments'] = Model_Department::find('all');
		$this->template->title = "Departments";
		$this->template->content = View::forge('admin\department/index', $data);

	}

	public function action_view($id = null)
	{
		$data['department'] = Model_Department::find($id);

		$this->template->title = "Department";
		$this->template->content = View::forge('admin\department/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Department::validate('create');

			if ($val->run())
			{
				$department = Model_Department::forge(array(
					'depname' => Input::post('depname'),
					'status' => 0,
				));

				if ($department and $department->save())
				{
					Session::set_flash('success', e('Added department #'.$department->id.'.'));

					Response::redirect('admin/department');
				}

				else
				{
					Session::set_flash('error', e('Could not save department.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Departments";
		$this->template->content = View::forge('admin\department/create');

	}

	public function action_edit($id = null)
	{
		$department = Model_Department::find($id);
		$val = Model_Department::validate('edit');

		if ($val->run())
		{
			$department->depname = Input::post('depname');

			if ($department->save())
			{
				Session::set_flash('success', e('Updated department #' . $id));

				Response::redirect('admin/department');
			}

			else
			{
				Session::set_flash('error', e('Could not update department #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$department->depname = $val->validated('depname');
				$department->status = $val->validated('status');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('department', $department, false);
		}

		$this->template->title = "Departments";
		$this->template->content = View::forge('admin\department/edit');

	}

	public function action_delete($id = null)
	{
		$deac = 1;
		$deac_sql = "UPDATE `departments` SET `status` = ".$deac." WHERE `id` = ".$id." ";
		$deac_sql_sub = DB::query($deac_sql)->execute();
		if (isset($deac_sql_sub)) {
			Session::set_flash('success', e('Deactivated department !'));
		} else {
			Session::set_flash('error', e('Could not deactivate department !'));
		}
		Response::redirect('admin/department');
	}

	public function action_activate($id = null)
	{
		$deac = 0;
		$deac_sql = "UPDATE `departments` SET `status` = ".$deac." WHERE `id` = ".$id." ";
		$deac_sql_sub = DB::query($deac_sql)->execute();
		if (isset($deac_sql_sub)) {
			Session::set_flash('success', e('Activated department !'));
		} else {
			Session::set_flash('error', e('Could not activated department !'));
		}
		Response::redirect('admin/department');
	}


}