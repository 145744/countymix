<?php
/**
* ----------------------------------------------------------------
*
 @Author :   Mamchenkov
 @Gist : https://gist.github.com/mamchenkov/04f708b8492f0f5d7a10

* ----------------------------------------------------------------
*/

// composer autoloader
require_once 'vendor/autoload.php';

// Shortcuts for simpler usage
use \Monolog\Logger;
use \Monolog\Formatter\LineFormatter;
use \Monolog\Handler\StreamHandler;

// Common logger
$log = new Logger('files');

// Line formatter without empty brackets in the end
$formatter = new LineFormatter(null, null, false, true);

// Debug level handler
$debugHandler = new StreamHandler('debug.log', Logger::DEBUG);
$debugHandler->setFormatter($formatter);

// Error level handler
$errorHandler = new StreamHandler('error.log', Logger::ERROR);
$errorHandler->setFormatter($formatter);

// This will have both DEBUG and ERROR messages
$log->pushHandler($debugHandler);

// This will have only ERROR messages
$log->pushHandler($errorHandler);

// The actual logging
$log->debug('I am debug');
$log->error('I am error', array('productId' => 123));

// Testing out faker

# Load Fakers own autoloader
require_once '/path/to/Faker/src/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;
?>
