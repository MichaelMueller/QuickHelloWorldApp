<?php

namespace Qck\HelloWorldApp\Controller;

use Qck\Interfaces\Controller;
use Qck\Interfaces\AppConfig;
use Qck\AppFramework\Response;
use Qck\HelloWorldApp\Templates\Page;

/**
 * Description of HelloWorldController
 *
 * @author muellerm
 */
class Start implements Controller
{

  public function run( AppConfig $Config )
  {
    $Text = "Hello World. Running on " . $Config->getHostName();
    if ( $Config->getRequest()->isCli() )
    {
      print $Text;
      return new Response( null );
    }
    else
      return new Response( new Page( $Config->getAppName(), $Text ) );
  }
}
