<?php

namespace Fardus\Traits\Symfony\Accessors;

/**
 * trait EnableAccessorsTrait
 * @package Fardus\Traits\Symfony\Entity
 */
trait FirstnameAccessorsTrait
{
    /**
     * @param string $firstname
     * @return static
     */
    public function setFirstname( ?string $firstname ): self
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }
}
