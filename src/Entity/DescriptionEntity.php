<?php

namespace Fardus\Traits\Symfony\Entity;

/**
 * trait DescriptionEntity
 * @package Fardus\Traits\Symfony\Entity
 */
trait DescriptionEntity
{
    /**
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