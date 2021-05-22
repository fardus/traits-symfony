<?php

namespace Fardus\Traits\Symfony\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fardus\Traits\Symfony\Accessors\EnableAccessorsTrait;

trait EnableEntityTrait
{
    use EnableAccessorsTrait;

    /**
     * @ORM\Column(type="boolean")
     */
    protected bool $enable = true;
}
