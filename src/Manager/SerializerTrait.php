<?php

namespace Fardus\Traits\Symfony\Manager;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Service\Attribute\Required;

trait SerializerTrait
{
    protected SerializerInterface $serializer;

    #[Required]
    public function setSerializer(SerializerInterface $serializer): static
    {
        $this->serializer = $serializer;
        return $this;
    }

    public function getSerializer(): SerializerInterface
    {
        return $this->serializer;
    }
}
