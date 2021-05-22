<?php

namespace Fardus\Traits\Symfony\Accessors;

trait IdAccessorsTrait
{
    public function setId(?int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
