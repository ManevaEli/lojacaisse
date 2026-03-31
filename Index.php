<?php 
require 'vendor/autoload.php';
require 'congfig.php';

session_start();

Flight::route('/', function() {
    echo 'Hello, World!';
});

Flight::start();