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
					'status' => Input::post('status'),
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
			$department->status = Input::post('status');

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
		if ($department = Model_Department::find($id))
		{
			$department->delete();

			Session::set_flash('success', e('Deleted department #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete department #'.$id));
		}

		Response::redirect('admin/department');

	}


}