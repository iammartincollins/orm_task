<?php
require_once "bootstrap.php";

$newProductName = $argv[1];
$newProductDescription = $argv[2];
$newProductPrice = $argv[3];
$categoryIds = explode(",", $argv[4]);

//create product object
$product = new Product();
$product->setName($newProductName);
$product->setDescription($newProductDescription);
$product->setPrice($newProductPrice);

//assign categories to product
foreach ($categoryIds as $categoryId) {
	$category = $entityManager->find("Category", $categoryId);
	$product->assignToCategory($category);
}

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . ", Name: " . $product->getName() . ", Desc: " . $product->getDescription() . ", Price: " . $product->getPrice() . "\n";