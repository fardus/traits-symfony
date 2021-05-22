<?php

namespace Fardus\Traits\Symfony\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fardus\Traits\Symfony\Accessors\AddressAccessorsTrait;

trait AddressEntityTrait
{
    use AddressAccessorsTrait;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected ?string $address = null;
}
