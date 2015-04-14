<?php

namespace Fuel\Migrations;

class Create_reqentries
{
	public function up()
	{
		\DBUtil::create_table('reqentries', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'tsrno' => array('constraint' => 11, 'type' => 'int'),
			'client' => array('constraint' => 50, 'type' => 'varchar'),
			'reqid' => array('constraint' => 11, 'type' => 'int'),
			'daterequested' => array('type' => 'datetime'),
			'daterequired' => array('type' => 'datetime'),
			'priority' => array('constraint' => 50, 'type' => 'varchar'),
			'error' => array('constraint' => 50, 'type' => 'varchar'),
			'iosfr' => array('type' => 'text'),
			'respdate' => array('type' => 'datetime'),
			'asw' => array('type' => 'text'),
			'deliverydate' => array('type' => 'datetime'),
			'assignedid' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('reqentries');
	}
}