<?php

namespace Fardus\Traits\Symfony\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Fardus\Traits\Symfony\Accessors\FirstnameAccessorsTrait;

/** @deprecated */
trait FirstnameEntity
{
    use FirstnameAccessorsTrait;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    protected $firstname;
}
