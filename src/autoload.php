<?php

/* @var $ServiceRepo Qck\ServiceRepo */
$ServiceRepo = Qck\ServiceRepo::getInstance();

$Config = new \Qck\App\Config( "HelloWorldApp" );
$ServiceRepo->addService( $Config );
$Routes = [];
$Routes[ \Qck\App\Interfaces\Router::DEFAULT_ROUTE ] = Qck\HelloWorldApp\StartController::class;
$Routes[ "protected" ] = Qck\HelloWorldApp\ProtectedController::class;
$ServiceRepo->addService( new \Qck\App\RouteSource( $Routes, [ "protected" ] ) );
$ServiceRepo->addService( new \Qck\HelloWorldApp\TestSession() );
$ServiceRepo->addService( new \Qck\HelloWorldApp\TestUserDb );


// add \Qck\AppConfig
$ServiceRepo->addService( new \Qck\HelloWorldApp\Page( $Config ) );
