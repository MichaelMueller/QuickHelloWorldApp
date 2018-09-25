<?php

// BASIC ERROR REPORTING
ini_set( 'display_errors', 0 );
ini_set( 'log_errors', 1 );
error_reporting( E_ALL );

// this should point to the main PSR-4 Autoloader
require_once('../../vendor/autoload.php');

// uses
use Qck\AppFramework\AppConfigFactory;
use Qck\AppFramework\App;
use Qck\HelloWorldApp\AppConfig;

// create & run application
$App = new App( new AppConfigFactory( AppConfig::class ) );
$App->run();
