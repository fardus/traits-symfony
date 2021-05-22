<?php

namespace Fardus\Traits\Symfony\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fardus\Traits\Symfony\Accessors\CityAccessorsTrait;

trait CityEntityTrait
{
    use CityAccessorsTrait;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected ?string $city = null;
}
