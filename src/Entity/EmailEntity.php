<?php

namespace Fardus\Traits\Symfony\Model;

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
