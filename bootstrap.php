<?php
// define paths
define('APP_PATH', realpath(dirname(__FILE__)));
define('CONFIG_PATH', rtrim(APP_PATH) . '/config');
define('LIBRARY_PATH', rtrim(APP_PATH) . '/library');
define('WEBROOT_PATH', rtrim(APP_PATH) . '/webroot');
define('FILEUPLOAD_PATH', rtrim(APP_PATH) . '/webroot/files');
define('WEBROOT_URL', 'http://ctd.local');
define('FILEUPLOAD_URL', 'http://ctd.local/files');

// include config
require_once(CONFIG_PATH.'/app.php');
require_once(LIBRARY_PATH.'/DatabaseHandler.php');
require_once(LIBRARY_PATH.'/phpdocx/classes/AutoLoader.inc');

// following section will be changed to autoloader later on...
// include application libraries
//foreach (glob(LIBRARY_PATH.'/*.php') as $filename) {
//    require_once($filename);
//}


/* end of file DatabaseHandler.php */