<?php

namespace Fardus\Traits\Symfony\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fardus\Traits\Symfony\Accessors\DescriptionAccessorsTrait;

trait DescriptionEntityTrait
{
    use DescriptionAccessorsTrait;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected ?string $description = null;
}
