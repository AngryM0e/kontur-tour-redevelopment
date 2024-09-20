<?php

class m130411_094330_create_news_table extends CDbMigration
{
	public function up()
	{
        $this->createTable("news",array(
            'id'=>'pk',
            'name'=>'string',
            'page'=>'text',
            'title'=>'string',
            'meta_d'=>'text',
            'meta_k'=>'text',
            'text'=>'text',
            'cdate'=>'date',
        ));
	}

	public function down()
	{
		echo "m130411_094330_create_news_table does not support migration down.\n";
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