<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

$conn = array(
	'driver' => 'pdo_mysql',
	'user' => 'root',
	'password' => 'DBP@ss',
	'host' => 'localhost',
	'dbname' => 'orm_task'
);

$entityManager = EntityManager::create($conn, $config);