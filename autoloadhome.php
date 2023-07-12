<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ob_start();
define('ROOT', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR);
$protocol = strtolower(substr($_SERVER['SERVER_PROTOCOL'], 0, 5)) == 'http://' ? 'http://' : 'https://';
define('baseUrl', $protocol . $_SERVER['HTTP_HOST'] . '/mlympix/');
$modbaseUrl = explode('/',baseUrl);
define('COMPANY','COMPANY-NAME');

include_once dirname(__FILE__).'/components/header.php';
