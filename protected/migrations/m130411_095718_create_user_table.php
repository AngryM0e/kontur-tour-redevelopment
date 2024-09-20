<?php

class m130411_095718_create_user_table extends CDbMigration
{
	public function up()
	{
        $this->createTable("user",array(
            'id'=>'pk',
            'username'=>'string',
            'password'=>'string',
            'email'=>'string',
            'access'=>'integer',
            'salt'=>'string',
            'notification_status'=>'integer',
            'date'=>'date',
        ));
        $this->insert("user",array(
            'id'=>1,
            'username'=>'admin',
            'password'=>'3f82ae5ba5419005a0693354a69f35bd',
            'email'=>'sdelai-sait@mail.ru',
            'access'=>1,
            'salt'=>'cc1aa436277138f61cda703991069eaf',
            'notification_status'=>1,
            'date'=>'2013-04-11',
        ));
	}

	public function down()
	{
		echo "m130411_095718_create_user_table does not support migration down.\n";
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