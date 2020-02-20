<?php

require 'core/bootstrap.php';
// require 'controllers/index.php';


// $router = new Router;

// require 'routes.php';

// require $router->direct('/');

// $uri = trim($_SERVER['REQUEST_URI'], '/');

// require Router::load('routes.php')->direct($uri);



require Router::load('routes.php')->direct(Request::uri());