<?php

//load required files
require 'core/bootstrap.php';

$database = $app['database'];

$uri = Request::uri();
$router = Router::load('routes.php');

require $router->direct($uri);