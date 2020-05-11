<?php

namespace Fardus\Traits\Symfony\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Fardus\Traits\Symfony\Accessors\NameAccessorsTrait;

/**
 * trait NameEntity
 * @package Fardus\Traits\Symfony\Entity
 */
trait NameEntity
{
    use NameAccessorsTrait;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    protected $name = null;
}
