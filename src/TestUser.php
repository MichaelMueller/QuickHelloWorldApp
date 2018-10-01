<?php

namespace Qck\HelloWorldApp;

/**
 * Description of StartController
 *
 * @author muellerm
 */
class TestUser implements \Qck\App\Interfaces\User
{

  public function hasPermissionFor( $Route )
  {
    return $Route == "protected" ? true : false;
  }
}
