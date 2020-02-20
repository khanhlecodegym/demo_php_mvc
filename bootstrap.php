<?php


require 'Brand.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$config = require 'config.php';

return new QueryBuilder(Connection::connect($config['database']));
