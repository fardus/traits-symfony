<?php

namespace Fardus\Traits\Symfony\Entity;

/**
 * trait CommentEntity
 * @package Fardus\Traits\Symfony\Entity
 */
trait CommentEntity
{
    /**
     * @var string
     */
    protected $comment;

    /**
     * @param string $comment
     * @return static
     */
    public function setComment( ?string $comment ) : self
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