<?php

$database = require 'bootstrap.php';

$listbrands = $database->selectAll('brands');

$listbrands = array_map(function ($brand) {
    return new Brand($brand->brand_id, $brand->brand_name);
}, $listbrands);

include 'index.view.php';
