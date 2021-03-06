<?php

namespace Qck\HelloWorldApp;

/**
 *
 * @author muellerm
 */
class Page implements \Qck\App\Interfaces\Output
{

  function __construct( \Qck\App\Interfaces\Config $Config )
  {
    $this->Config = $Config;
  }

  public function render()
  {
    ob_start();

    /* @var $Router \Qck\App\Interfaces\Router */
    $Router = \Qck\ServiceRepo::getInstance()->get( \Qck\App\Interfaces\Router::class );
    ?>
    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <title><?= $this->Config->getAppName() ?></title>
      </head>
      <body>
        <h1>Hello World on <?= $this->Config->getHostName() ?>.</h1>
        <a href="<?= $Router->getLink( ProtectedController::class )?>">Go to protected Hello World</a>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
    </html>
    <?php
    return ob_get_clean();
  }

  public function getAdditionalHeaders()
  {
    return [];
  }

  public function getCharset()
  {
    return \Qck\App\Interfaces\Output::CHARSET_UTF_8;
  }

  public function getContentType()
  {
    return \Qck\App\Interfaces\Output::CONTENT_TYPE_TEXT_HTML;
  }

  /**
   *
   * @var \Qck\App\Interfaces\Config
   */
  protected $Config;

}
