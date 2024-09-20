<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=vs',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'm6ho7uab',
            'charset' => 'utf8',
            //'enableProfiling' => true,
            //'enableParamLogging' => true,
        ),
    ),
);