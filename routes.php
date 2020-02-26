<?php

// $router->define([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'contact' => 'controllers/contact.php',
//     'showAddBrand' => 'controllers/show-add-brand.php',
//     'addBrand' => 'controllers/add-brand.php'
// ]);


// $router->get('', 'controllers/index.php');
// $router->get('about', 'controllers/about.php');
// $router->get('contact', 'controllers/contact.php');
// $router->get('showAddBrand', 'controllers/show-add-brand.php');
// $router->post('addBrand', 'controllers/add-brand.php');


$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('showAddBrand', 'BrandControler@add');
$router->post('addBrand', 'BrandControler@store');