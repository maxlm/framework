<?php
// Environment
define('DEBUG', true);

// Paths
define('PATH_ROOT', realpath(dirname(__FILE__). '/../../../'));
define('PATH_APPLICATION', PATH_ROOT . '/application');
define('PATH_DATA', PATH_ROOT . '/data');
define('PATH_VENDOR', PATH_ROOT . '/vendor');
define('PATH_PUBLIC', PATH_ROOT . '/public');
define('PATH_THEME', PATH_ROOT . '/themes');

// init loader
require_once PATH_VENDOR . '/autoload.php';
require_once 'BootstrapTest.php';
require_once 'TestCase.php';
require_once 'TestListener.php';