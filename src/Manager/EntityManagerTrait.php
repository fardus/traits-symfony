<?php

namespace Fardus\Traits\Symfony\Manager;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Trait EntityManagerTrait
 * @package Fardus\Traits\Symfony\Entity
 */
trait EntityManagerTrait
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @required
     * @param EntityManagerInterface $entityManager
     * @return static
     */
    public function setEntityManager( EntityManagerInterface $entityManager ): self
    {
        $this->entityManager = $entityManager;
        return $this;
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager(): EntityManagerInterface
    {
        return $this->entityManager;
    }
}
