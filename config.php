<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "[[root]]");
	$config['dbname'] = '[[dbname]]';
	$config['host'] = '[[host]]';
	$config['dbuser'] = '[[dbuser]]';
	$config['dbpass'] = '[[dbpass]]';
} else {
	define("BASE_URL", "[[root]]");
	$config['dbname'] = '[[dbname]]';
	$config['host'] = '[[host]]';
	$config['dbuser'] = '[[dbuser]]';
	$config['dbpass'] = '[[dbpass]]';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}