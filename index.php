<?php

require 'Brand.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=bikestores;charset=utf8', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare('select * from brands');
$statement->execute();

// var_dump($statement->fetchAll());
// var_dump($statement->fetchAll(PDO::FETCH_OBJ));

// $results = $statement->fetchAll(PDO::FETCH_OBJ);
// var_dump($results[0]->brand_name);

$results = $statement->fetchAll(PDO::FETCH_CLASS, 'Brand');
var_dump($results[0]->getCity());


include 'index.view.php'
?>