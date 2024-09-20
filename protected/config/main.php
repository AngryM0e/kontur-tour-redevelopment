<?php
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'defaultController' => 'pages',
    /* 'theme'=>'bootstrap', */
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Miss Alisa',
    'language' => 'ru',
    // preloading 'log' component
    //для запуска twitter bootstrap была добавлен функция init в компонент bootsrap
    //фикс был сделан каким то человеком и описан в репозитории расширения
    'preload' => array('log'/* ,'bootstrap' */),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'aliases' => array(
        //assuming you extracted the files to the extensions folder
        'xupload' => 'ext.xupload'
    ),
    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'l0lz6jdn',
            'ipFilters' => array('*'),
        ),
    /* 'gii'=>array(
      'generatorPaths'=>array(
      'bootstrap.gii',
      ),
      ), */
    ),

    // application components
   'components' => array(
        'iwi' => array(
            'class' => 'application.extensions.iwi.IwiComponent',
            // GD or ImageMagick
            'driver' => 'GD',
            // ImageMagick setup path
            //'params'=>array('directory'=>'C:/ImageMagick'),
        ),
//        'clientScript' => array(
//            'class' => 'ext.minify.EClientScript',
//            'combineScriptFiles' => true, 
//            'combineCssFiles' => true, 
//            'optimizeCssFiles' => true, 
//            'optimizeScriptFiles' => true, 
//        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),

        'viewRenderer' => array(
            'class' => 'ext.ETwigViewRenderer',
            // All parameters below are optional, change them to your needs
            'fileExtension' => '.twig',
            'options' => array(
                'autoescape' => true,
                'debug' => true,
            ),
            'extensions' => array(
                'Twig_Extension_Text',
                'Twig_Extension_Debug',
            ),
            'globals' => array(
                'html' => 'CHtml'
            ),
            'functions' => array(
                'rot13' => 'str_rot13',
            ),
            'filters' => array(
                'jencode' => 'CJSON::encode',
            ),
        ),

        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => include('urls.php'),
        ),
        'request' => array(
//            'class' => 'CHttpRequest',
//            'enableCookieValidation' => true,
//            'enableCsrfValidation' => !isset($_POST['dontvalidate']) ? true : false,
//            'csrfCookie' => array('domain' => '.' . $current_domain)
        ),		
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=konturtoru_new',
            'emulatePrepare' => true,
            'username' => 'konturtoru_new',
            'password' => '123456',
            'charset' => 'utf8',
            //'enableProfiling' => true,
            //'enableParamLogging' => true,
        ),
	
        'errorHandler' => array(
            // use 'site/error' action to display errors
            //'errorAction' => 'site/error',
        ),
       
       'log' => array(
            'class' => 'CLogRouter',
            'enabled' => YII_DEBUG, //надо будет убрать
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            #array(
            #    'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
            #    'ipFilters'=>array('109.195.177.192'),
            #),
            // uncomment the following to show log messages on web pages

              /*array(
              'class'=>'CWebLogRoute',
              ),*/

            ),
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => require(dirname(__FILE__) . '/params.php'),
);