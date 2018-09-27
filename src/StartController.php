<?php

namespace Qck\HelloWorldApp;

/**
 * Description of StartController
 *
 * @author muellerm
 */
class StartController implements \Qck\App\Interfaces\Controller
{

  //put your code here
  public function run( \Qck\Interfaces\ServiceRepo $ServiceRepo )
  {
    /* @var $ResponseFactory \Qck\Interfaces\ResponseFactory */
    $ResponseFactory = $ServiceRepo->get( \Qck\App\Interfaces\ResponseFactory::class );
    /* @var $AppConfig \Qck\App\InterfacesConfig */
    $Output = $ServiceRepo->get( \Qck\App\Interfaces\Output::class );

    return $ResponseFactory->create( $Output );
  }
}
