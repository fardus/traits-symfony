<?php

namespace Fardus\Traits\Symfony\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * trait NameEntity
 * @package Fardus\Traits\Symfony\Entity
 */
trait NameEntity
{
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     * @return static
     */
    public function setName( ?string $name ): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}
