<?php

namespace Fardus\Traits\Symfony\Accessors;

trait ZipAccessorsTrait
{
    public function setZip(?string $zip): static
    {
        $this->zip = $zip;
        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }
}
