<?php

class m130411_094444_create_pages_table extends CDbMigration
{
	public function up()
	{
        $this->createTable("pages",array(
            'id'=>'pk',
            'url'=>'string',
            'meta_title'=>'string',
            'title'=>'string',
            'description'=>'text',
            'keywords'=>'text',
            'text'=>'text',
            'disp'=>'boolean',
        ));
	}

	public function down()
	{
		echo "m130411_094444_create_pages_table does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}