<?php

// require 'Brand.php';
// require 'database/Connection.php';
// require 'database/QueryBuilder.php';

$database = require 'bootstrap.php';

$listbrands = $database->selectAll('brands');
var_dump($listbrands);
$listbrands = array_map(function ($brand) {
    return new Brand($brand->brand_id, $brand->brand_name);
}, $listbrands);

include 'index.view.php';
