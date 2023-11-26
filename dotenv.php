<?php 
    require __DIR__ . '/dotenv/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $API_KEY = $_ENV['API_KEY'];

?>