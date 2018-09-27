<?php

/* @var $ServiceRepo Qck\ServiceRepo */
$ServiceRepo = Qck\ServiceRepo::getInstance();

// add \Qck\App\Config
$Config = new \Qck\App\Config( "HelloWorldApp" );
$ServiceRepo->addService( $Config );

// add Router \Qck\App\Router
$Router = new \Qck\App\Router( Qck\ServiceRepo::getInstance()->get( Qck\App\Interfaces\Request::class ) );
$Router->addController( $Router->getDefaultQuery(), \Qck\HelloWorldApp\StartController::class );
$ServiceRepo->addService( $Router );

// add \Qck\AppConfig
$ServiceRepo->addService( new \Qck\HelloWorldApp\Page( $Config ) );
