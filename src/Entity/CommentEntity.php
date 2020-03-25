<?php

namespace Fardus\Traits\Symfony\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * trait CommentEntity
 * @package Fardus\Traits\Symfony\Entity
 */
trait CommentEntity
{
    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    protected $comment;

    /**
     * @param string $comment
     * @return static
     */
    public function setComment( ?string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }

}
