<?php
require_once "bootstrap.php";

$dql = "SELECT p FROM Product p ORDER BY p.id DESC";
$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);

$products = $query->getResult();

foreach ($products as $product) {
	echo $product->getName() . " (" . $product->getId() . ") - " . $product->getDescription() . " - £" . $product->getPrice() . "\n";
	echo "	Categories:\n";
	foreach ($product->getCategories() as $category) {
		echo "	" . $category->getName() . "\n";
	}
	echo "\n";
}
