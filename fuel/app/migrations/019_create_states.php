<?php

namespace Fuel\Migrations;

class Create_states
{
	public function up()
	{
		\DBUtil::create_table('states', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'state' => array('constraint' => 200, 'type' => 'varchar'),
			'abbrev' => array('constraint' => 2, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('states');
	}
}