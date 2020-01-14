<?php

namespace Fardus\Traits\Symfony\Manager;

use Psr\Log\LoggerInterface;

/**
 * Trait EntityManagerTrait
 * @package Fardus\Traits\Symfony\Manager
 */
trait LoggerTrait
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @required
     * @param LoggerInterface $logger
     * @return static
     */
    public function setLogger( LoggerInterface $logger ): self
    {
        $this->logger = $logger;
        return $this;
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }
}