<?php

namespace Qck\HelloWorldApp;

/**
 * Description of StartController
 *
 * @author muellerm
 */
class ProtectedController implements \Qck\App\Interfaces\Controller
{

  //put your code here
  public function run( \Qck\Interfaces\ServiceRepo $ServiceRepo )
  {
    /* @var $ResponseFactory \Qck\Interfaces\ResponseFactory */
    $ResponseFactory = $ServiceRepo->get( \Qck\App\Interfaces\ResponseFactory::class );
    /* @var $PageFactory \Qck\App\Html\PageFactory */
    $PageFactory = $ServiceRepo->get( \Qck\App\Interfaces\Html\PageFactory::class );

    $Page = $PageFactory->create( "Protected Hello World", "Protected Hello World" );
    return $ResponseFactory->create( $Page );
  }
}
