<?php

namespace Fardus\Traits\Symfony\Manager;

use Doctrine\ORM\EntityManager;

/**
 * Trait EntityManagerTrait
 * @package Fardus\Traits\Symfony\Entity
 */
trait EntityManagerTrait
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @required
     * @param EntityManager $entityManager
     * @return static
     */
    public function setEntityManager( EntityManager $entityManager ): self
    {
        $this->entityManager = $entityManager;
        return $this;
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager(): EntityManager
    {
        return $this->entityManager;
    }
}