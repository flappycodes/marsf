<?php
class Model_Reqentry extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'tsrno',
		'client',
		'reqid',
		'daterequested',
		'daterequired',
		'priority',
		'error',
		'iosfr',
		'respdate',
		'asw',
		'deliverydate',
		'assignedid',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('tsrno', 'Tsrno', 'required|valid_string[numeric]');
		$val->add_field('client', 'Client', 'required|max_length[50]');
		$val->add_field('reqid', 'Reqid', 'required|valid_string[numeric]');
		$val->add_field('daterequested', 'Daterequested', 'required');
		$val->add_field('daterequired', 'Daterequired', 'required');
		$val->add_field('priority', 'Priority', 'required|max_length[50]');
		$val->add_field('error', 'Error', 'required|max_length[50]');
		$val->add_field('iosfr', 'Iosfr', 'required');
		$val->add_field('respdate', 'Respdate', 'required');
		$val->add_field('asw', 'Asw', 'required');
		$val->add_field('deliverydate', 'Deliverydate', 'required');
		$val->add_field('assignedid', 'Assignedid', 'required|valid_string[numeric]');

		return $val;
	}

}
