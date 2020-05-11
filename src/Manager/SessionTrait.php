<?php

namespace Fardus\Traits\Symfony\Manager;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

trait SessionTrait
{
    /**
     * @var SessionInterface|Session
     */
    protected $session;

    public function getSession(): SessionInterface
    {
        return $this->session;
    }

    /**
     * @required
     */
    public function setSession(SessionInterface $session): self
    {
        $this->session = $session;

        return $this;
    }
}
