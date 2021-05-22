<?php

namespace Fardus\Traits\Symfony\Accessors;

trait FirstnameAccessorsTrait
{
    public function setFirstname(?string $firstname): static
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }
}
