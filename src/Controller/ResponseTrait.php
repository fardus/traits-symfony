<?php

namespace Fardus\Traits\Symfony\Controller;

use Fardus\Traits\Symfony\Manager\LoggerTrait;
use Symfony\Component\HttpFoundation\Response;

trait ResponseTrait
{
    use LoggerTrait;

    public function jsonError(\Exception $exception, bool $throw = false)
    {
        $error = ['error' => $exception->getMessage() ];
        if ($this->getParameter('kernel.debug')) {
            $error['traces'] = $exception->getTrace();
        }
        $this->logger->error(__METHOD__, compact('exception', 'error'));
        if ($throw) {
            throw $exception;
        }
        return $this->json($error, $exception->getCode() ?: Response::HTTP_INTERNAL_SERVER_ERROR);

    }

}
