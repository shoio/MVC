<?php

require 'environment.php';

define("BASE", 'http://localhost/twitter/');

global $config;
$config = array();
if(ENVIRONMENT == "development"){
	$config['dbname'] = 'blog';
	$config['charset'] 	= 'utf8';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else{
	$config['dbname'] = 'u187466692_news';
	$config['host'] = 'mysql.hostinger.com.br';
	$config['charset'] 	= 'utf8';
	$config['dbuser'] = 'u187466692_shoio';
	$config['dbpass'] = '280412';
}


?>