<?php
class Controller_Admin_Reqentry extends Controller_Admin 
{

	public function action_index()
	{
		$data['reqentries'] = Model_Reqentry::find('all');
		$this->template->title = "Reqentries";
		$this->template->content = View::forge('admin\reqentry/index', $data);

	}

	public function action_view($id = null)
	{
		$data['reqentry'] = Model_Reqentry::find($id);

		$this->template->title = "Reqentry";
		$this->template->content = View::forge('admin\reqentry/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Reqentry::validate('create');

			if ($val->run())
			{
				$reqentry = Model_Reqentry::forge(array(
					'tsrno' => Input::post('tsrno'),
					'client' => Input::post('client'),
					'reqid' => Input::post('reqid'),
					'daterequested' => Input::post('daterequested'),
					'daterequired' => Input::post('daterequired'),
					'priority' => Input::post('priority'),
					'error' => Input::post('error'),
					'iosfr' => Input::post('iosfr'),
					'respdate' => Input::post('respdate'),
					'asw' => Input::post('asw'),
					'deliverydate' => Input::post('deliverydate'),
					'assignedid' => Input::post('assignedid'),
				));

				if ($reqentry and $reqentry->save())
				{
					Session::set_flash('success', e('Added reqentry #'.$reqentry->id.'.'));

					Response::redirect('admin/reqentry');
				}

				else
				{
					Session::set_flash('error', e('Could not save reqentry.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Reqentries";
		$this->template->content = View::forge('admin\reqentry/create');

	}

	public function action_edit($id = null)
	{
		$reqentry = Model_Reqentry::find($id);
		$val = Model_Reqentry::validate('edit');

		if ($val->run())
		{
			$reqentry->tsrno = Input::post('tsrno');
			$reqentry->client = Input::post('client');
			$reqentry->reqid = Input::post('reqid');
			$reqentry->daterequested = Input::post('daterequested');
			$reqentry->daterequired = Input::post('daterequired');
			$reqentry->priority = Input::post('priority');
			$reqentry->error = Input::post('error');
			$reqentry->iosfr = Input::post('iosfr');
			$reqentry->respdate = Input::post('respdate');
			$reqentry->asw = Input::post('asw');
			$reqentry->deliverydate = Input::post('deliverydate');
			$reqentry->assignedid = Input::post('assignedid');

			if ($reqentry->save())
			{
				Session::set_flash('success', e('Updated reqentry #' . $id));

				Response::redirect('admin/reqentry');
			}

			else
			{
				Session::set_flash('error', e('Could not update reqentry #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$reqentry->tsrno = $val->validated('tsrno');
				$reqentry->client = $val->validated('client');
				$reqentry->reqid = $val->validated('reqid');
				$reqentry->daterequested = $val->validated('daterequested');
				$reqentry->daterequired = $val->validated('daterequired');
				$reqentry->priority = $val->validated('priority');
				$reqentry->error = $val->validated('error');
				$reqentry->iosfr = $val->validated('iosfr');
				$reqentry->respdate = $val->validated('respdate');
				$reqentry->asw = $val->validated('asw');
				$reqentry->deliverydate = $val->validated('deliverydate');
				$reqentry->assignedid = $val->validated('assignedid');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('reqentry', $reqentry, false);
		}

		$this->template->title = "Reqentries";
		$this->template->content = View::forge('admin\reqentry/edit');

	}

	public function action_delete($id = null)
	{
		if ($reqentry = Model_Reqentry::find($id))
		{
			$reqentry->delete();

			Session::set_flash('success', e('Deleted reqentry #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete reqentry #'.$id));
		}

		Response::redirect('admin/reqentry');

	}


}