<?php

namespace Fardus\Traits\Symfony\Accessors;

trait CityAccessorsTrait
{
    public function setCity(?string $city): static
    {
        $this->city = $city;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }
}
