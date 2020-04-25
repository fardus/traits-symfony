<?php

namespace Fardus\Traits\Symfony\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fardus\Traits\Symfony\Accessors\AddressAccessorsTrait;

trait AddressEntity
{
    use AddressAccessorsTrait;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     * @var string
     */
    protected $address = null;
}
