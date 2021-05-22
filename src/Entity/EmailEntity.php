<?php

namespace Fardus\Traits\Symfony\Entity;

use Fardus\Traits\Symfony\Accessors\EmailAccessorsTrait;
use Doctrine\ORM\Mapping as ORM;

/** @deprecated */
trait EmailEntity
{
    use EmailAccessorsTrait;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    protected $email;
}
