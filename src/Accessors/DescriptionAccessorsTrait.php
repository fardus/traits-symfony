<?php

namespace Fardus\Traits\Symfony\Accessors;

trait DescriptionAccessorsTrait
{
    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
