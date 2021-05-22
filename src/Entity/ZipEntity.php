<?php

namespace Fardus\Traits\Symfony\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Fardus\Traits\Symfony\Accessors\ZipAccessorsTrait;

/** @deprecated */
trait ZipEntity
{
    use ZipAccessorsTrait;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     * @var string
     */
    protected $zip = null;
}
