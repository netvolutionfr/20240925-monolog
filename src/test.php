<?php
require __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$SOURCE_TOKEN = $_ENV['LOGTAIL_SOURCE_TOKEN'];

use Logtail\Monolog\LogtailHandlerBuilder;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

// Create the logger
$logger = new Logger('my_logger');
// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Level::Debug));
$logger->pushHandler(new FirePHPHandler());
$handler = LogtailHandlerBuilder::withSourceToken("$SOURCE_TOKEN")
    ->build();
$logger->pushHandler($handler);

$logger->debug("This is a debug message.");
$logger->info("This is an info level message.");
$logger->notice("This is a notice level message.");
$logger->warning("This is a warning level message.");
$logger->error("This is an error level message.");
$logger->critical("This is a critical level message.");
$logger->alert("This is an alert level message.");
$logger->emergency("This is an emergency level message.");