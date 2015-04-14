<?php
class Controller_Admin_Requestor extends Controller_Admin 
{

	public function action_index()
	{
		$view = View::forge('admin\requestor/index');
		$sql = "SELECT *, r.`id` AS rid, r.`status` AS rs FROM requestors AS r 
				INNER JOIN departments AS d 
				ON r.`depid` = d.`id` 
				WHERE d.`status` = 0 ";
		$sql_db = DB::query($sql)->execute()->as_array();
		$view->set_global('requestors', $sql_db);
		$this->template->title = "Requestors";
		$this->template->content = $view;

	}

	public function action_view($id = null)
	{
		$view = View::forge('admin\requestor/view');
		$sql = "SELECT *, r.`id` AS rid FROM requestors AS r 
				INNER JOIN departments AS d 
				ON r.`depid` = d.`id` 
				WHERE d.`status` = 0 ";
		$sql_db = DB::query($sql)->execute()->as_array();
		$view->set_global('requestors', $sql_db);
		$this->template->title = "Requestor";
		$this->template->content = $view;

	}

	public function action_create()
	{
		$view = View::forge('admin\requestor/create');
		if (Input::method() == 'POST')
		{
			$val = Model_Requestor::validate('create');

			if ($val->run())
			{
				$requestor = Model_Requestor::forge(array(
					'firstname' => Input::post('firstname'),
					'middlename' => Input::post('middlename'),
					'lastname' => Input::post('lastname'),
					'depid' => Input::post('depid'),
					'contactno' => Input::post('contactno'),
					'status' => 0,
					'group' => Input::post('group'),
				));

				if ($requestor and $requestor->save())
				{
					Session::set_flash('success', e('Added requestor #'.$requestor->id.'.'));

					Response::redirect('admin/requestor');
				}

				else
				{
					Session::set_flash('error', e('Could not save requestor.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}
		$view->set_global('department', Arr::assoc_to_keyval(Model_Department::find('all'), 'id', 'depname'));
		$this->template->title = "Requestors";
		$this->template->content = $view;

	}

	public function action_edit($id = null)
	{
		$requestor = Model_Requestor::find($id);
		$view = View::forge('admin\requestor/edit');
		$val = Model_Requestor::validate('edit');

		if ($val->run())
		{
			$requestor->firstname = Input::post('firstname');
			$requestor->middlename = Input::post('middlename');
			$requestor->lastname = Input::post('lastname');
			$requestor->depid = Input::post('depid');
			$requestor->contactno = Input::post('contactno');
			$requestor->status = 0;
			$requestor->group = Input::post('group');

			if ($requestor->save())
			{
				Session::set_flash('success', e('Updated requestor #' . $id));

				Response::redirect('admin/requestor');
			}

			else
			{
				Session::set_flash('error', e('Could not update requestor #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$requestor->firstname = $val->validated('firstname');
				$requestor->middlename = $val->validated('middlename');
				$requestor->lastname = $val->validated('lastname');
				$requestor->depid = $val->validated('depid');
				$requestor->contactno = $val->validated('contactno');
				$requestor->status = $val->validated('status');
				$requestor->group = $val->validated('group');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('requestor', $requestor, false);
		}

		$view->set_global('department', Arr::assoc_to_keyval(Model_Department::find('all'), 'id', 'depname'));
		$this->template->title = "Requestors";
		$this->template->content = $view;

	}

	public function action_delete($id = null)
	{
		$deac = 1;
		$deac_sql = "UPDATE `requestors` SET `status` = ".$deac." WHERE `id` = ".$id." ";
		$deac_sql_sub = DB::query($deac_sql)->execute();
		if (isset($deac_sql_sub)) {
			Session::set_flash('success', e('Deactivated requestor !'));
		} else {
			Session::set_flash('error', e('Could not deactivate requestor !'));
		}
		Response::redirect('admin/requestor');
	}

	public function action_activate($id = null)
	{
		$deac = 0;
		$deac_sql = "UPDATE `requestors` SET `status` = ".$deac." WHERE `id` = ".$id." ";
		$deac_sql_sub = DB::query($deac_sql)->execute();
		if (isset($deac_sql_sub)) {
			Session::set_flash('success', e('Activated requestor !'));
		} else {
			Session::set_flash('error', e('Could not activate requestor !'));
		}
		Response::redirect('admin/requestor');
	}


}