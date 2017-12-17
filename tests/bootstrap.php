<?php

error_reporting(E_ALL | E_STRICT);

//	include the composer autoloader
$loader = require __DIR__ . '/../vendor/autoload.php';

//	autoload abstract TestCase classes in test directory
$loader->addPsr4( 'dekuan\\depay\\', __DIR__ . '/../vendor/dekuan/depay/src/' );
$loader->addPsr4( 'dekuan\\depay\\WechatPay\\', __DIR__ . '/../src/' );

