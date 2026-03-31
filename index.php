<?php
require 'vendor/autoload.php';
require 'config.php';
session_start();

Flight::route('GET /caisse', function() {
    require 'app/controllers/CaisseController.php';
    CaisseController::getCaisse();
});

Flight::route('POST /caisse/choisir', function() {
    require 'app/controllers/CaisseController.php';
    CaisseController::choisir();
});

Flight::start();