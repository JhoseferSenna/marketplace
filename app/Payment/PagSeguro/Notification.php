<?php

namespace App\Payment\PagSeguro;

class Notification
{
  public function getTransaction()
  {
    if (!\Pagseguro\Helpers\Xhr::hasPost()) throw new \InvalidArgumentException($_POST);
    $response = \Pagseguro\Services\Transactions\Notification::check(
      \PagSeguro\Configuration\Configure::getAccountCredentials()
    );

    return $response;
  }
}
