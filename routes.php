<?php

// $router->define([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'contact' => 'controllers/contact.php',
//     'showAddBrand' => 'controllers/show-add-brand.php',
//     'addBrand' => 'controllers/add-brand.php'
// ]);


$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('contact', 'controllers/contact.php');
$router->get('showAddBrand', 'controllers/show-add-brand.php');
$router->post('addBrand', 'controllers/add-brand.php');