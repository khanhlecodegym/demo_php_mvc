<?php

// var_dump($_SERVER);


App::get('database')->insert('brands', [
    'brand_name' => $_POST['brand_name']
]);



header('Location: /');