<?php 

global $config;
$config = array();

define("BASE","http://localhost:8888/medical");
define("BASEADMIN", BASE. "admin");
define("BASEDIR", __DIR__ . '/');
define("PROJECTPATH", __DIR__.'/');

$config['dbname']= 'medical';
$config['host']= 'localhost';
$config['password']= 'root';
$config['dbuser']= 'root';

