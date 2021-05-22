<?php

namespace Fardus\Traits\Symfony\Entity;

use Doctrine\ORM\Mapping as ORM;

trait CommentEntityTrait
{
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected ?string $comment = null;

    public function setComment(?string $comment): static
    {
        $this->comment = $comment;
        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }
}
