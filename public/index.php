<?php
use App\RMVC\App as App;

session_start();

require_once "../vendor/autoload.php";
require_once "../routes/web.php";

App::run();

//  Запуск локального сервера
//  php -S localhost:8000