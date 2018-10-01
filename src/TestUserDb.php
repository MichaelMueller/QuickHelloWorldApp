<?php

namespace Qck\HelloWorldApp;

/**
 * Description of StartController
 *
 * @author muellerm
 */
class TestUserDb implements \Qck\App\Interfaces\UserDb
{

  public function getUser( $UserName )
  {
    static $User = null;
    if ( !$User )
      $User = new TestUser;
    return $User;
  }
}
