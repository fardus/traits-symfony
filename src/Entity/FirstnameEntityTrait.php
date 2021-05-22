<?php

namespace Fardus\Traits\Symfony\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Fardus\Traits\Symfony\Accessors\FirstnameAccessorsTrait;

trait FirstnameEntityTrait
{
    use FirstnameAccessorsTrait;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", nullable=true)
     */
    protected ?string $firstname = null;
}
