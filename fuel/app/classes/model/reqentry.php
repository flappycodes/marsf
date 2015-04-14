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
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('tsrno', 'Tsrno', 'required');
		$val->add_field('client', 'Client', 'max_length[50]');
		$val->add_field('reqid', 'Reqid', 'valid_string[numeric]');
		$val->add_field('daterequested', 'Daterequested', '');
		$val->add_field('daterequired', 'Daterequired', '');
		$val->add_field('priority', 'Priority', 'max_length[50]');
		$val->add_field('error', 'Error', 'max_length[50]');
		$val->add_field('iosfr', 'Iosfr', '');
		$val->add_field('respdate', 'Respdate', '');
		$val->add_field('asw', 'Asw', '');
		$val->add_field('deliverydate', 'Deliverydate', '');
		$val->add_field('assignedid', 'Assignedid', 'valid_string[numeric]');

		return $val;
	}

}
