<?php
//include_once 'xhprof_lib/utils/xhprof_lib.php';
//include_once 'xhprof_lib/utils/xhprof_runs.php';
//xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

// On dev display all errors
if (YII_DEBUG) {
      error_reporting(-1);
      ini_set('display_errors', true);
}


require_once($yii);
Yii::createWebApplication($config)->run();

//$profiler_namespace = 'xhprof_testing';
//$xhprof_data = xhprof_disable();
//$xhprof_runs = new XHProfRuns_Default();
//$run_id = $xhprof_runs->save_run($xhprof_data, "xhprof_testing");
//$profiler_url = sprintf('http://xhprof.loc/index.php?run=%s&source=%s', $run_id, $profiler_namespace);
//        echo <<<OUT
//        <a href="$profiler_url">XHprof</a>
//OUT;

