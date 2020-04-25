<?php

namespace Fardus\Traits\Symfony\Accessors;

trait AddressAccessorsTrait
{
    /**
     * @return static
     */
    public function setAddress( ?string $address ): self
    {
        $this->address = $address;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }
}
