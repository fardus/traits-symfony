<?php

namespace Fardus\Traits\Symfony\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fardus\Traits\Symfony\Accessors\EnableAccessorsTrait;

/** @deprecated */
trait EnableEntity
{
    use EnableAccessorsTrait;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $enable = true;
}
