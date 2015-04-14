<?php
class Model_User extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'username',
		'password',
		'group',
		'email',
		'last_login',
		'login_hash',
		'profile_fields',
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
		$val->add_field('username', 'Username', 'max_length[50]');
		$val->add_field('password', 'Password', 'max_length[255]');
		$val->add_field('group', 'Group', 'valid_string[numeric]');
		$val->add_field('email', 'Email', 'valid_email|max_length[255]');
		$val->add_field('last_login', 'Last Login', 'valid_string[numeric]');
		$val->add_field('login_hash', 'Login Hash', 'max_length[255]');
		$val->add_field('profile_fields', 'Profile Fields', '');

		return $val;
	}

}
