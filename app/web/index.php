<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

defined('APPLICATION_ENV') or define('APPLICATION_ENV', 'dev'); // dev OR prod

require dirname(__DIR__) . '/vendor/autoload.php';

try {
    $user = new \App\Course\User('John', 'admin@site.com', 28);
} catch (Exception $e) {
    die($e->getMessage() . PHP_EOL);
}

dump($user);


