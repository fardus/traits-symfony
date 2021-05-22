<?php

namespace Fardus\Traits\Symfony\Entity;

use Fardus\Traits\Symfony\Accessors\EmailAccessorsTrait;
use Doctrine\ORM\Mapping as ORM;

trait EmailUniqueEntityTrait
{
    use EmailAccessorsTrait;

    /**
     * @ORM\Column(type="string", nullable=true, unique)
     */
    protected ?string $email = null;
}
