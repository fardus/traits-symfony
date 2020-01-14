<?php

namespace Fardus\Traits\Symfony\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * trait EnableEntity
 * @package Fardus\Traits\Symfony\Entity
 */
trait EnableEntity
{
    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    protected $enable;

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