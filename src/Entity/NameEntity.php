<?php

namespace Fardus\Traits\Symfony\Entity;

/**
 * trait NameEntity
 * @package Fardus\Traits\Symfony\Entity
 */
trait NameEntity
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     * @return NameEntity
     */
    public function setName( $name )
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}