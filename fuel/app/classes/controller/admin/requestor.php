<?php
class Controller_Admin_Requestor extends Controller_Admin 
{

	public function action_index()
	{
		$data['requestors'] = Model_Requestor::find('all');
		$this->template->title = "Requestors";
		$this->template->content = View::forge('admin\requestor/index', $data);

	}

	public function action_view($id = null)
	{
		$data['requestor'] = Model_Requestor::find($id);

		$this->template->title = "Requestor";
		$this->template->content = View::forge('admin\requestor/view', $data);

	}

	public function action_create()
	{
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
					'status' => Input::post('status'),
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

		$this->template->title = "Requestors";
		$this->template->content = View::forge('admin\requestor/create');

	}

	public function action_edit($id = null)
	{
		$requestor = Model_Requestor::find($id);
		$val = Model_Requestor::validate('edit');

		if ($val->run())
		{
			$requestor->firstname = Input::post('firstname');
			$requestor->middlename = Input::post('middlename');
			$requestor->lastname = Input::post('lastname');
			$requestor->depid = Input::post('depid');
			$requestor->contactno = Input::post('contactno');
			$requestor->status = Input::post('status');
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

		$this->template->title = "Requestors";
		$this->template->content = View::forge('admin\requestor/edit');

	}

	public function action_delete($id = null)
	{
		if ($requestor = Model_Requestor::find($id))
		{
			$requestor->delete();

			Session::set_flash('success', e('Deleted requestor #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete requestor #'.$id));
		}

		Response::redirect('admin/requestor');

	}


}