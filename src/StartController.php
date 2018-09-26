<?php

namespace Qck\HelloWorldApp;

/**
 * Description of StartController
 *
 * @author muellerm
 */
class StartController implements \Qck\Interfaces\App\Controller
{

  //put your code here
  public function run( \Qck\Interfaces\ServiceRepo $ServiceRepo )
  {
    /* @var $ResponseFactory \Qck\Interfaces\ResponseFactory */
    $ResponseFactory = $ServiceRepo->get( \Qck\Interfaces\App\ResponseFactory::class );
    /* @var $AppConfig \Qck\Interfaces\AppConfig */
    $Output = $ServiceRepo->get( \Qck\Interfaces\App\Output::class );

    return $ResponseFactory->create( $Output );
  }
}
