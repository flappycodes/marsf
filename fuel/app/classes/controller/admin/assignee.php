<?php
class Controller_Admin_Assignee extends Controller_Admin 
{

	public function action_index()
	{
		$data['assignees'] = Model_Assignee::find('all');
		$this->template->title = "Assignees";
		$this->template->content = View::forge('admin\assignee/index', $data);

	}

	public function action_view($id = null)
	{
		$data['assignee'] = Model_Assignee::find($id);

		$this->template->title = "Assignee";
		$this->template->content = View::forge('admin\assignee/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Assignee::validate('create');

			if ($val->run())
			{
				$assignee = Model_Assignee::forge(array(
					'firstname' => Input::post('firstname'),
					'middlename' => Input::post('middlename'),
					'lastname' => Input::post('lastname'),
					'status' => Input::post('status'),
				));

				if ($assignee and $assignee->save())
				{
					Session::set_flash('success', e('Added assignee #'.$assignee->id.'.'));

					Response::redirect('admin/assignee');
				}

				else
				{
					Session::set_flash('error', e('Could not save assignee.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Assignees";
		$this->template->content = View::forge('admin\assignee/create');

	}

	public function action_edit($id = null)
	{
		$assignee = Model_Assignee::find($id);
		$val = Model_Assignee::validate('edit');

		if ($val->run())
		{
			$assignee->firstname = Input::post('firstname');
			$assignee->middlename = Input::post('middlename');
			$assignee->lastname = Input::post('lastname');
			$assignee->status = Input::post('status');

			if ($assignee->save())
			{
				Session::set_flash('success', e('Updated assignee #' . $id));

				Response::redirect('admin/assignee');
			}

			else
			{
				Session::set_flash('error', e('Could not update assignee #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$assignee->firstname = $val->validated('firstname');
				$assignee->middlename = $val->validated('middlename');
				$assignee->lastname = $val->validated('lastname');
				$assignee->status = $val->validated('status');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('assignee', $assignee, false);
		}

		$this->template->title = "Assignees";
		$this->template->content = View::forge('admin\assignee/edit');

	}

	public function action_delete($id = null)
	{
		if ($assignee = Model_Assignee::find($id))
		{
			$assignee->delete();

			Session::set_flash('success', e('Deleted assignee #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete assignee #'.$id));
		}

		Response::redirect('admin/assignee');

	}


}