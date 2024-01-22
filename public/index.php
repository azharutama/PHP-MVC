<?php
require_once __DIR__ . '/../vendor/autoload.php';

use azhar\belajar\php\mvc\App\router;
use azhar\belajar\php\mvc\controllers\homeController;

Router::add('GET', '/', homeController::class, 'index');
Router::add('GET', '/hello', homeController::class, 'hello');
Router::add('GET', '/world', homeController::class, 'world');


Router::run();
