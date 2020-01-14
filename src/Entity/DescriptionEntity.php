<?php

namespace Fardus\Traits\Symfony\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * trait DescriptionEntity
 * @package Fardus\Traits\Symfony\Entity
 */
trait DescriptionEntity
{
    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    protected $description;

    /**
     * @param string $description
     * @return static
     */
    public function setDescription( $description )
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

}