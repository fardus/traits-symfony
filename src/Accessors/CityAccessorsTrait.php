<?php

namespace Fardus\Traits\Symfony\Accessors;

trait CityAccessorsTrait
{
    /**
     * @return static
     */
    public function setCity( ?string $city ): self
    {
        $this->city = $city;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }
}
