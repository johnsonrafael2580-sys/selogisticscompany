<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Angalia kama application ipo kwenye maintenance mode
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// 2. Sajili Composer autoloader
require __DIR__.'/vendor/autoload.php';

// 3. LAZIMISHA APP NAMESPACE (Hii inatatua tatizo la Target class does not exist)
// Inasoma faili tulilotengeneza kusaidia seva kupata Controllers
if (file_exists(__DIR__.'/bootstrap/autoload.php')) {
    require __DIR__.'/bootstrap/autoload.php';
}

// 4. Washa (Bootstrap) Laravel
/** @var Application $app */
$app = require_once __DIR__.'/bootstrap/app.php';

// 5. Shughulikia Request inayokuja
$app->handleRequest(Request::capture());