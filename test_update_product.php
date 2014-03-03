<?php
require_once "bootstrap.php";

$productId = $argv[1];
$newName = $argv[2];
$newDescription = $argv[3];
$newPrice = $argv[4];

$product = $entityManager->find('Product', $productId);

if ($product === null) {
	echo "Product does not exist";
	exit(1);
}

$product->setName($newName);
$product->setDescription($newDescription);
$product->setPrice($newPrice);

$entityManager->flush();