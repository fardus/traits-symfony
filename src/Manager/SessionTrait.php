<?php

namespace Fardus\Traits\Symfony\Manager;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Contracts\Service\Attribute\Required;

trait SessionTrait
{
    protected SessionInterface $session;

    public function getSession(): SessionInterface
    {
        return $this->session;
    }

    #[Required]
    public function setSession(SessionInterface $session): self
    {
        $this->session = $session;

        return $this;
    }
}
