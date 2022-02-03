<?php

require __DIR__.'/../app/Utils/Database.php';
require __DIR__.'/../app/Models/Product.php';

$product = new Product();

$produitQueJeCherche = $product->find("1");

var_dump($produitQueJeCherche);