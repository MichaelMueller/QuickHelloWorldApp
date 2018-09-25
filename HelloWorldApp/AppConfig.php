<?php

namespace Qck\HelloWorldApp;

/**
 * Description of QckPhpMailer
 *
 * @author muellerm
 */
class AppConfig extends \Qck\AppFramework\AppConfig
{

  public function getRouter()
  {
    static $var = null;
    if ( !$var )
      $var = new \Qck\AppFramework\NamespacedRouter( "\\Qck\\HelloWorldApp\\Controller", $this->getRequest() );
    return $var;
  }

  public function getAppName()
  {
    return "QuickHelloWorldApp";
  }
}
