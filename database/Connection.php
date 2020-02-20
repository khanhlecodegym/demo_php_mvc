<?php

class Connection 
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1:3306;dbname=bikestores;charset=utf8', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
