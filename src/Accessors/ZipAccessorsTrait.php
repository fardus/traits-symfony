<?php

namespace Fardus\Traits\Symfony\Accessors;

trait ZipAccessorsTrait
{
    /**
     * @return static
     */
    public function setZip( ?string $zip ): self
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }
}
