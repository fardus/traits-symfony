<?php

namespace Fardus\Traits\Symfony\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fardus\Traits\Symfony\Accessors\DescriptionAccessorsTrait;

/** @deprecated */
trait DescriptionEntity
{
    use DescriptionAccessorsTrait;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @var string
     */
    protected $description;
}
