<?php
require_once "bootstrap.php";

$productId = $argv[1];
$categoryIds = explode(",", $argv[2]);

$product = $entityManager->find('Product', $productId);

if ($product === null) {
	echo "Product does not exist";
	exit(1);
}

$product->clearCategories();

foreach ($categoryIds as $categoryId) {
	$category = $entityManager->find("Category", $categoryId);
	$product->assignToCategory($category);
}

$entityManager->persist($product);
$entityManager->flush();