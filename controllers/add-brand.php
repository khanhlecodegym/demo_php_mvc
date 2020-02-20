<?php

// var_dump($_SERVER);


$app['database']->insert('brands', [
    'brand_name' => $_POST['brand_name']
]);



header('Location: /');