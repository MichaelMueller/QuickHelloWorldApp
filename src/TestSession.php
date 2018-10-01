<?php

namespace Qck\HelloWorldApp;

/**
 * Description of StartController
 *
 * @author muellerm
 */
class TestSession implements \Qck\App\Interfaces\Session
{

  public function getUserName()
  {
    return TestUser::class;
  }
}
