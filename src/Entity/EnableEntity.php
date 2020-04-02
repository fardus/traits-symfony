<?php

namespace Fardus\Traits\Symfony\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fardus\Traits\Symfony\Accessors\EnableAccessorsTrait;

/**
 * trait EnableEntity
 * @package Fardus\Traits\Symfony\Entity
 */
trait EnableEntity
{
    use EnableAccessorsTrait;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    protected $enable;
}
