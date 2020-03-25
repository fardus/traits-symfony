<?php

namespace Fardus\Traits\Symfony\Model;

/**
 * trait EmailTrait
 * @package Fardus\Traits\Symfony\Model
 */
trait EmailAccessorsTrait
{
    /**
     * @param string $email
     * @return static
     */
    public function setEmail( ?string $email ) : self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }

}
