<?php

namespace Fardus\Traits\Symfony\Entity;

use Fardus\Traits\Symfony\Accessors\EmailAccessorsTrait;
use Doctrine\ORM\Mapping as ORM;

trait EmailEntityTrait
{
    use EmailAccessorsTrait;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected ?string $email = null;
}
