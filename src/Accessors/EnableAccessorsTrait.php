<?php

namespace Fardus\Traits\Symfony\Accessors;

trait EnableAccessorsTrait
{
    public function setEnable(bool $enable): static
    {
        $this->enable = $enable;
        return $this;
    }

    public function getEnable(): bool
    {
        return $this->enable;
    }
}
