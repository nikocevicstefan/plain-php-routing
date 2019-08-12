<?php

$config = require 'config.php'; //returns config array

require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

//creates a connection to the db
return new QueryBuilder(
    Connection::make($config['database'])
);