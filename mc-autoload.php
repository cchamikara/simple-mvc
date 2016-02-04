<?php
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

if(!defined('SITE_URL')){
    define("SITE_URL", 'http://localhost:8080/mvc1');
}

require_once(ABSPATH . 'mc-config.php');

//TODO: user auto loader to load all the files in '/libs/' folder.

require_once(ABSPATH . '/libs/router.php');
require_once(ABSPATH . '/libs/controller.php');
require_once(ABSPATH . '/libs/DbConnect.php');
require_once(ABSPATH . '/libs/Model.php');
require_once(ABSPATH . '/libs/View.php');
require_once(ABSPATH . '/libs/functions.php');
require_once(ABSPATH . '/libs/base_dao.php');


require_once(ABSPATH . '/dao/user_dao.php');