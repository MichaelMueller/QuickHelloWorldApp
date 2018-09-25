<?php

// this should point to the main PSR-4 Autoloader
require_once('../vendor/autoload.php');


// create & run application
$App = new \Qck\AppFramework\App( new \Qck\AppFramework\AppConfigFactory( \Qck\HelloWorldApp\AppConfig::class ) );
$App->run();
