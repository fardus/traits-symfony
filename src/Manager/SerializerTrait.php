<?php

namespace Fardus\Traits\Symfony\Manager;

use Symfony\Component\Serializer\SerializerInterface;

/**
 * Trait SerializerTrait
 * @package Fardus\Traits\Symfony\Entity
 */
trait SerializerTrait
{

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @required
     * @param SerializerInterface $serializer
     * @return static
     */
    public function setSerializer(SerializerInterface $serializer) : self
    {
        $this->serializer = $serializer;
        return $this;
    }

    /**
     * @return SerializerInterface
     */
    public function getSerializer() : SerializerInterface
    {
        return $this->serializer;
    }
}
