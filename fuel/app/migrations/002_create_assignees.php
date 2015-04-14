<?php

namespace Fuel\Migrations;

class Create_assignees
{
	public function up()
	{
		\DBUtil::create_table('assignees', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'firstname' => array('constraint' => 50, 'type' => 'varchar'),
			'middlename' => array('constraint' => 50, 'type' => 'varchar'),
			'lastname' => array('constraint' => 50, 'type' => 'varchar'),
			'status' => array('type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('assignees');
	}
}