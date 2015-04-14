<?php
class Model_Assignee extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'firstname',
		'middlename',
		'lastname',
		'status',
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
		$val->add_field('firstname', 'Firstname', 'max_length[50]');
		$val->add_field('middlename', 'Middlename', 'max_length[50]');
		$val->add_field('lastname', 'Lastname', 'max_length[50]');
		$val->add_field('status', 'Status', '');

		return $val;
	}

}
