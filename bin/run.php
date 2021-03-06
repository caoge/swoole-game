<?php
date_default_timezone_set('Asia/Shanghai');
header("Content-type: text/html; charset=utf-8");

use Game\Conf\Config;
use \Game\App\GameServer;

require __DIR__ .'/../vendor/autoload.php';

$config = Config::getPortConf();
GameServer::getInstance()->initServer($config)->start();
