<?php

$app = [];

$app['config'] = require './config.php';

require 'model/Brand.php';
require 'Router.php';
require 'Request.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

// $config = require './config.php';

// return new QueryBuilder(Connection::connect($config['database']));

$app['database'] = new QueryBuilder(
    Connection::connect($app['config']['database'])
);
