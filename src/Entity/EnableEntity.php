<?php

namespace Fardus\Traits\Symfony\Entity;

/**
 * trait EnableEntity
 * @package Fardus\Traits\Symfony\Entity
 */
trait EnableEntity
{
    /**
     * @var bool
     */
    protected $enable;

    /**
     * @param bool $enable
     * @return static
     */
    public function setEnable( $enable ): self
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnable()
    {
        return $this->enable;
    }

}