<?php

namespace Fardus\Traits\Symfony\Accessors;

trait AddressAccessorsTrait
{
    public function setAddress(?string $address): static
    {
        $this->address = $address;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }
}
