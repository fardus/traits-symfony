<?php

namespace Fardus\Traits\Symfony\Controller;

use Fardus\Traits\Symfony\Manager\LoggerTrait;
use Symfony\Component\HttpFoundation\Response;

trait ResponseTrait
{
    use LoggerTrait;

    public function jsonError(\Exception $exception)
    {
        $error =['error' => $exception->getMessage() ];
        if ($this->get('kernel.debug')) {
            $error['traces'] = $exception->getTrace();
        }
        $this->logger->error(__FUNCTION__, compact('exception', 'error'));
        return $this->json($error, $exception->getCode() ?: Response::HTTP_INTERNAL_SERVER_ERROR);

    }

}
