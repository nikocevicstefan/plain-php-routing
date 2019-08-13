<?php

$app = [];

$app['config'] = require 'config.php'; //returns config array

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

//creates a connection to the db
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);