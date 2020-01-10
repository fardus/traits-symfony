<?php

namespace Fardus\Traits\Symfony\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * trait NameEntity
 * @package Fardus\Traits\Symfony\Entity
 */
trait NameEntity
{
    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     * @return static
     */
    public function setName( $name ): self
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