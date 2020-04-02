<?php

namespace Fardus\Traits\Symfony\Entity;

use Fardus\Traits\Symfony\Accessors\EmailAccessorsTrait;

/**
 * trait EmailEntity
 * @package Fardus\Traits\Symfony\Entity
 */
trait EmailEntity
{
    use EmailAccessorsTrait;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    protected $email;
}
