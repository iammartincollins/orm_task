<?php
require_once "bootstrap.php";

$theProductId = $argv[1];

$product = $entityManager->find("Product", (int)$theProductId);

$entityManager->remove($product);

$entityManager->flush();

echo "Product " . $theProductId . " has been removed.\n";