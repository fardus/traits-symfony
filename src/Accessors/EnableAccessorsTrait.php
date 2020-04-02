<?php

namespace Fardus\Traits\Symfony\Accessors;

/**
 * trait EnableAccessorsTrait
 * @package Fardus\Traits\Symfony\Entity
 */
trait EnableAccessorsTrait
{
    /**
     * @param bool $enable
     * @return static
     */
    public function setEnable(bool $enable ): self
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnable() : bool
    {
        return $this->enable;
    }
}
