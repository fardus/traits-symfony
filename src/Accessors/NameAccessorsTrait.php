<?php

namespace Fardus\Traits\Symfony\Accessors;

/**
 * trait NameAccessorsTrait
 * @package Fardus\Traits\Symfony\Accessors
 */
trait NameAccessorsTrait
{
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
