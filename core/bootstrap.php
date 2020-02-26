<?php

// $app = [];

// $app['config'] = require './config.php';

// require 'model/Brand.php';
// require 'Router.php';
// require 'Request.php';
// require 'database/Connection.php';
// require 'database/QueryBuilder.php';

// $config = require './config.php';

// return new QueryBuilder(Connection::connect($config['database']));

// $app['database'] = new QueryBuilder(
//     Connection::connect($app['config']['database'])
// );

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::connect(App::get('config')['database'])
));

function view($name, $data = []) 
{
    extract($data);

    return require "views/{$name}.view.php";
}

function redirect($path = null)
{
    header("Location: /{$path}");
}