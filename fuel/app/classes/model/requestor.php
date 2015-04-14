<?php
class Model_Requestor extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'firstname',
		'middlename',
		'lastname',
		'depid',
		'contactno',
		'status',
		'group',
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
		$val->add_field('firstname', 'Firstname', 'required|max_length[50]');
		$val->add_field('middlename', 'Middlename', 'required|max_length[50]');
		$val->add_field('lastname', 'Lastname', 'required|max_length[50]');
		$val->add_field('depid', 'Depid', 'required|valid_string[numeric]');
		$val->add_field('contactno', 'Contactno', 'required|max_length[50]');
		$val->add_field('status', 'Status', 'required');
		$val->add_field('group', 'Group', 'required|valid_string[numeric]');

		return $val;
	}

}
