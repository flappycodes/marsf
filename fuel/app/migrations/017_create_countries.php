<?php

namespace Fuel\Migrations;

class Create_countries
{
	public function up()
	{
		\DBUtil::create_table('countries', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'ccode' => array('constraint' => 2, 'type' => 'varchar'),
			'isd' => array('constraint' => 9, 'type' => 'varchar'),
			'country' => array('constraint' => 200, 'type' => 'varchar'),
			'currency' => array('constraint' => 5, 'type' => 'varchar'),
			'languages' => array('constraint' => 50, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('countries');
	}
}